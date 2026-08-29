<div class="card">
<div class="card-header">تولید کدهای هدیه (Gift Codes)</div>
<div class="card-body"><?php
    function generateRandStr($length)
    {
        $randstr = "";
        for ($i = 0; $i < $length; $i++) {
            $randnum = mt_rand(0, 61);
            if ($randnum < 10) {
                $randstr .= chr($randnum + 48);
            } else if ($randnum < 36) {
                $randstr .= chr($randnum + 55);
            } else {
                $randstr .= chr($randnum + 61);
            }
        }
        return $randstr;
    }

    $isError = 0;
    $Error = '';
    if(isset($_GET['del'])){
        $database->query("DELETE FROM codes WHERE id = ".intval($_GET['del']));
        echo '<div class="alert alert-success">کد هدیه با موفقیت حذف شد.</div><br>';
    }
    if(isset($_POST) && !empty($_POST)){
        if(isset($_POST['goldAmount']) && is_numeric($_POST['goldAmount']) && isset($_POST['codeNum']) && is_numeric($_POST['codeNum'])){
            $goldAmount = intval($_POST['goldAmount']);
            $codeNum = intval($_POST['codeNum']);
            if($goldAmount > 0 && $codeNum > 0){
                echo '<div class="alert alert-success">لیست کدهای تولید شده:<br>';
                for($i=1;$i<=$codeNum;$i++){
                    $code = generateRandStr(10);
                    $database->query("INSERT into codes (codeNum,goldAmount,isUsed,idUser) VALUES('".$code."', ".$goldAmount.", 0, 0)");
                    echo $code;
                    echo '<br>';
                }
                echo '</div>';
            }else{
                $isError++;
                $Error = 'مقادیر وارد شده نامعتبر است.';
            }
        }else{
            $isError++;
            $Error = 'مقادیر وارد شده نامعتبر است.';
        }
    }
?>

<?php if($isError){ ?>
    <b style="color:red;"><?php echo $Error; ?></b> <br>
<?php } ?>
<form action="" method="post">
<div class="form-group">
        <label>تعداد سکه (طلا) هر کد:</label>
        <input name="goldAmount" class="form-control" type="number" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label>تعداد کدهای مورد نیاز:</label>
        <input name="codeNum" class="form-control" type="number" value="1" autocomplete="off" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">تولید کد هدیه</button>
    </div>
</form>
</div>
</div>

<table cellpadding="1" cellspacing="1" class="table mt-5 mb-5 inbox">
    <thead>
    <tr>
			<th colspan="6">لیست کدهای هدیه ثبت شده</th>
		</tr>

        <tr>
            <th>#</th>
            <th>کد</th>
            <th>سکه (طلا)</th>
            <th>وضعیت</th>
            <th>بازیکن مصرف کننده</th>
            <th>عملیات</th>
        </tr>
    </thead>
    <tbody>
    <?php $codes = $database->query("SELECT * FROM codes ORDER BY id DESC"); 
    if(is_array($codes) && count($codes) > 0){
        foreach($codes as $code){
            $u_info = ($code['isUsed'] && $code['idUser'] > 0) ? $database->getUserInfo($code['idUser']) : null;
            $u_name = ($u_info && isset($u_info['username'])) ? $u_info['username'] : '-';
         ?>
        <tr>
        <td><?php echo $code['id']; ?></td>
        <td><?php echo htmlspecialchars($code['codeNum']); ?></td>
        <td><?php echo number_format($code['goldAmount']); ?></td>
        <td><?php echo $code['isUsed'] ? '<span style="color:red;">مصرف شده</span>' : '<span style="color:green;">فعال</span>'; ?></td>
        <td><?php echo $code['isUsed'] ? '<a href="spieler.php?uid='.$code['idUser'].'">'.htmlspecialchars($u_name).'</a>' : '-'; ?></td>
        <td><a href="index.php?p=codes&del=<?php echo $code['id']; ?>"><button type="button" class="btn btn-danger btn-sm">حذف</button></a></td>
        </tr>
    <?php 
        }
        }else{
            echo '<tr><td colspan="6">هیچ کد هدیه‌ای ثبت نشده است.</td></tr>';
        } ?>
    </tbody>
</table>
