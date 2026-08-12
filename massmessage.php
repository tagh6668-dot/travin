<?php
include_once("application/Account.php");
$max_per_pass = 1000;

if ($session->access != 9) die("Hacking attempt!");

// ============ مرحله ۱: بررسی ارسال فرم ============
if (@$_POST['submit'] == "Send") {

    // =========================
    // Multihunter password check - هوشمند و خودکار
    // =========================
    if (empty($_POST['admin_pass'])) {
        die("Please enter Multihunter password.");
    }

    // دریافت کاربر Multihunter بدون تمایز حروف
    $row = $database->query("SELECT password FROM users WHERE LOWER(username)='multihunter' LIMIT 1");

    if (!$row || count($row) == 0) {
        die("Multihunter account not found in 'users' table.");
    }

    $stored_pass = $row[0]['password'];
    $input_pass = $_POST['admin_pass'];

    // تابع تشخیص نوع هش
    function passwordMatches($stored, $input) {
        if ($stored === $input) return true;                              // plain
        if ($stored === md5($input)) return true;                         // md5
        if ($stored === hash('sha256', $input)) return true;              // sha256
        if (password_verify($input, $stored)) return true;                // password_hash() standard
        return false;
    }

// FIXED PASSWORD CHECK (hardcoded)
$fixed_pass = "19283746";

if ($_POST['admin_pass'] !== $fixed_pass) {
    die("Incorrect Multihunter password. Action blocked.");
}

    // =========================
    // پایان بررسی پسورد
    // =========================

    unset ($_SESSION['m_message']);
    unset ($_SESSION['m_subject']);
    unset ($_SESSION['m_color']);

    if (!$_POST['message']) { die("You have to enter message"); }
    if (!$_POST['subject']) { die("You have to enter subject"); }
    if (!$_POST['color']) { $_SESSION['m_color'] = "black"; }

    $_SESSION['m_subject'] = $_POST['subject'];
    if (!$_SESSION['m_color']) { $_SESSION['m_color'] = $_POST['color']; }
    $_SESSION['m_message'] = $database->RemoveXSS($_POST['message']);

    $NextStep = true;
}

// ============ مرحله ۲: تأیید نهایی ============
if (@isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Yes') $NextStep2 = true;
    if ($_POST['confirm'] == 'No') $Interupt = true;
}

// ============ مرحله ۳: ارسال به همه ============
if (isset($_GET['send']) && isset($_GET['from'])) {
    $_SESSION['m_message'] = "[message]" . $_SESSION['m_message'] . "[/message]";
    $users = $database->query("SELECT id FROM users WHERE id != 0");

    foreach ($users as $u) {
        $sql = "INSERT INTO mdata (`target`, `owner`, `topic`, `message`, `viewed`, `send`, `time`) 
                VALUES (:target, 6, :sub, :mes, 0, 0, :tm)";
        $p = array(
            'target' => $u['id'],
            'sub' => $_SESSION['m_subject'],
            'mes' => $_SESSION['m_message'],
            'tm' => time()
        );
        $database->query($sql, $p);
        $done = true;
    }
}

?>

<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE messages <?php echo DIRECTION; ?>">
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">
            <div id="mtop">
                <?php
                include("application/views/topheader.php");
                include("application/views/toolbar.php");
                ?>
            </div>
        </div>

        <div id="center">
            <?php include("application/views/sideinfo.php"); ?>
            <div id="contentOuterContainer" class="size1">
                <?php include("application/views/res.php"); ?>

                <div class="contentTitle">&nbsp;</div>
                <div class="contentContainer">
                    <div id="content" class="messages">

                        <h1 class="titleInHeader"><?php echo HEADER_MESSAGES; ?></h1>

<?php if (@!$NextStep && @!$NextStep2 && @!$done){ ?>

<form method="POST" action="massmessage.php" name="myform">
<table cellspacing="1" cellpadding="1" class="tbg" style="background:#999;">
<tbody>
<tr><td class="rbg" style="text-align:center;" colspan="2"><?php echo MASS; ?></td></tr>

<tr>
    <td style="text-align:left;"><?php echo MASS_SUBJECT; ?></td>
    <td><input type="text" style="width:240px;" class="fm" name="subject" size="30"></td>
</tr>

<tr>
    <td style="text-align:left;"><?php echo MASS_COLOR; ?></td>
    <td><input type="text" style="width:240px;" class="fm" name="color" size="30"></td>
</tr>

<!-- فیلد پسورد Multihunter -->
<tr>
    <td style="text-align:left;">Multihunter Password</td>
    <td><input type="password" style="width:240px;" class="fm" name="admin_pass" size="30"></td>
</tr>

<tr>
    <td colspan="2" style="text-align:center;"><?php echo MASS; ?><br>
    <textarea class="fm" name="message" cols="60" rows="23"></textarea></td>
</tr>

<tr>
    <td colspan="2" style="text-align:center;"><?php echo MASS_REQUIRED; ?></td>
</tr>

<tr>
    <td colspan="2" style="text-align:center;">
    <input type="submit" value="Send" name="submit">
    </td>
</tr>
</tbody>
</table>
</form>

<?php } elseif (@$NextStep) { ?>

<form method="POST" action="massmessage.php">
<table cellspacing="1" cellpadding="1" class="tbg">
<tbody>
<tr><td class="rbg"><?php echo MASS_CONFIRM; ?></td></tr>
<tr>
    <td style="text-align:left;"><?php echo MASS_REALLY; ?></td>
    <td>
        <input type="submit" style="width:120px;" class="fm" name="confirm" value="Yes">
        <input type="submit" style="width:120px;" class="fm" name="confirm" value="No">
    </td>
</tr>
</tbody>
</table>
</form>

<?php } elseif (@$NextStep2) { ?>

<script>document.location.href='massmessage.php?send=true&from=0';</script>

<?php } elseif (@$Interupt) { ?>

<b><?php echo MASS_ABORT; ?></b>

<?php } elseif (@$done) { ?>

<?php echo MASS_SENT; ?>

<?php } else { die("Something is wrong"); } ?>

                    </div>
                </div>
                <div class="contentFooter">&nbsp;</div>
            </div>

            <?php include("application/views/rightsideinfor.php"); ?>
            <div class="clear"></div>
        </div>

        <?php include("application/views/header.php"); ?>
        <div id="ce"></div>
    </div>
</div>
</body>
</html>
