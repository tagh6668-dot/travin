<?php 
    if(isset($_POST['depodoldur'])){
		include("../../application/config.php");


	
		$stmt=$baglanDB->prepare("UPDATE vdata SET wood=maxstore,clay=maxstore,iron=maxstore,crop=maxcrop WHERE owner=?");
		$stmt->execute([3]);


		echo "پر کردن انبار ها";
    }
?>
<form action="" method="post">
	<div class="form-group text-center">
		<input type="submit" class="btn btn-primary" name="depodoldur" value="Depoları Doldur">
	</div>
</form>
<br>
