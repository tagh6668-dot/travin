<?php
include("include("/home/steamse2/c/config.php");
");

$slot = intval($_POST['slot']);
$state = intval($_POST['state']);

mysqli_query($link,"UPDATE raidlist SET autofarm=$state WHERE id=$slot");
