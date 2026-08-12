<?php
session_start();

if(!isset($_SESSION['access']) || $_SESSION['access'] < 9){
    die("<h1><font color='red'>Access Denied: You are not Admin!</font></h1>");
}

include_once("../../config.php");
include_once("../../DB.php");
include_once("../../Database/db_MYSQL.php");

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

function num($key){
    return isset($_POST[$key]) ? intval($_POST[$key]) : 0;
}

$wwname = isset($_POST['wwname']) ? addslashes(trim($_POST['wwname'])) : '';

$database->queryFetch("UPDATE fdata SET
	f1  = '".num('id1level')."',
	f1t = '".num('id1gid')."',
	f2  = '".num('id2level')."',
	f2t = '".num('id2gid')."',
	f3  = '".num('id3level')."',
	f3t = '".num('id3gid')."',
	f4  = '".num('id4level')."',
	f4t = '".num('id4gid')."',
	f5  = '".num('id5level')."',
	f5t = '".num('id5gid')."',
	f6  = '".num('id6level')."',
	f6t = '".num('id6gid')."',
	f7  = '".num('id7level')."',
	f7t = '".num('id7gid')."',
	f8  = '".num('id8level')."',
	f8t = '".num('id8gid')."',
	f9  = '".num('id9level')."',
	f9t = '".num('id9gid')."',
	f10  = '".num('id10level')."',
	f10t = '".num('id10gid')."',
	f11  = '".num('id11level')."',
	f11t = '".num('id11gid')."',
	f12  = '".num('id12level')."',
	f12t = '".num('id12gid')."',
	f13  = '".num('id13level')."',
	f13t = '".num('id13gid')."',
	f14  = '".num('id14level')."',
	f14t = '".num('id14gid')."',
	f15  = '".num('id15level')."',
	f15t = '".num('id15gid')."',
	f16  = '".num('id16level')."',
	f16t = '".num('id16gid')."',
	f17  = '".num('id17level')."',
	f17t = '".num('id17gid')."',
	f18  = '".num('id18level')."',
	f18t = '".num('id18gid')."',
	f19  = '".num('id19level')."',
	f19t = '".num('id19gid')."',
	f20  = '".num('id20level')."',
	f20t = '".num('id20gid')."',
	f21  = '".num('id21level')."',
	f21t = '".num('id21gid')."',
	f22  = '".num('id22level')."',
	f22t = '".num('id22gid')."',
	f23  = '".num('id23level')."',
	f23t = '".num('id23gid')."',
	f24  = '".num('id24level')."',
	f24t = '".num('id24gid')."',
	f25  = '".num('id25level')."',
	f25t = '".num('id25gid')."',
	f26  = '".num('id26level')."',
	f26t = '".num('id26gid')."',
	f27  = '".num('id27level')."',
	f27t = '".num('id27gid')."',
	f28  = '".num('id28level')."',
	f28t = '".num('id28gid')."',
	f29  = '".num('id29level')."',
	f29t = '".num('id29gid')."',
	f30  = '".num('id30level')."',
	f30t = '".num('id30gid')."',
	f31  = '".num('id31level')."',
	f31t = '".num('id31gid')."',
	f32  = '".num('id32level')."',
	f32t = '".num('id32gid')."',
	f33  = '".num('id33level')."',
	f33t = '".num('id33gid')."',
	f34  = '".num('id34level')."',
	f34t = '".num('id34gid')."',
	f35  = '".num('id35level')."',
	f35t = '".num('id35gid')."',
	f36  = '".num('id36level')."',
	f36t = '".num('id36gid')."',
	f37  = '".num('id37level')."',
	f37t = '".num('id37gid')."',
	f38  = '".num('id38level')."',
	f38t = '".num('id38gid')."',
	f39  = '".num('id39level')."',
	f39t = '".num('id39gid')."',
	f40  = '".num('id40level')."',
	f40t = '".num('id40gid')."',
	f99  = '".num('id99level')."',
	f99t = '".num('id99gid')."',
	wwname = '".$wwname."'
	WHERE vref = '".$id."'");

header("Location: ../../../panel/admin.php?action=recountPop&did=".$id);
exit;
?>
