<?php
include_once "application/Account.php";

if (!$session->logged_in) {
    header("Location: login.php");
    exit;
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>

<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE plus perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV1">
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">
            <?php
            include("application/views/topheader.php");
            include("application/views/toolbar.php");
            ?>
        </div>

        <div id="center">
            <?php include("application/views/sideinfo.php"); ?>

            <div id="contentOuterContainer" class="size1">
                <?php include("application/views/res.php"); ?>
                <div class="contentTitle">
                    <a id="closeContentButton" class="contentTitleButton" href="dorf<?=$session->link?>.php" title="بستن">&nbsp;</a>
                </div>
                <div class="contentContainer">
                    <div id="content" class="plus">
                        <?php
                        switch ($id) {
                            case 2:
                                include("application/views/Plus/2.php");
                                break;
                            case 3:
                                if (file_exists("application/views/Ranking/Plus/3.php")) {
                                    include("application/views/Ranking/Plus/3.php");
                                } else {
                                    include("application/views/Plus/1.php");
                                }
                                break;
                            case 5:
                                if (file_exists("application/views/Plus/code.php")) {
                                    include("application/views/Plus/code.php");
                                } else {
                                    include("application/views/Ranking/Plus/5.php");
                                }
                                break;
                            case 6:
                                if ($session->access == 9 && file_exists("application/views/Plus/codeGen.php")) {
                                    include("application/views/Plus/codeGen.php");
                                } else {
                                    include("application/views/Plus/1.php");
                                }
                                break;
                            case 0:
                            case 1:
                            default:
                                include("application/views/Plus/1.php");
                                break;
                        }
                        ?>
                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="contentFooter">&nbsp;</div>
            </div>

            <?php include("application/views/rightsideinfor.php"); ?>
            <div class="clear"></div>
        </div>

        <?php include("application/views/header.php"); ?>
    </div>
    <div id="ce"></div>
</div>
</body>
</html>
