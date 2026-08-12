<?php
include("application/Session.php");

$slots = $database->query("SELECT * FROM raidlist WHERE auto=1");

foreach($slots as $slot){

if(time() - $slot['last_attack'] >= 600){

$troops = array(
1=>$slot['t1'],
2=>$slot['t2'],
3=>$slot['t3'],
4=>$slot['t4'],
5=>$slot['t5'],
6=>$slot['t6'],
7=>$slot['t7'],
8=>$slot['t8'],
9=>$slot['t9'],
10=>$slot['t10']
);

if(array_sum($troops)>0){

$database->sendRaid(
$slot['wref'],
$slot['towref'],
$troops
);

$database->query("UPDATE raidlist SET last_attack=".time()." WHERE id=".$slot['id']);

}

}

}
