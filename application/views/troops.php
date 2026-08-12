

<?php



if(isMobile()){
    $pos = 40;
    $gap = 8;
}else{
    $pos = 40;
    $gap = 3;
}
$troops = $village->unitsInVillage();

for($i=1;$i<=70;$i++) {
 if(isset($troops['u'.$i]) && $troops['u'.$i] > 0){

   echo '<div class="troopFixed" style="top:'.$pos.'%; left:10px;">';
   echo '<img class="unit u'.$i.'" src="img/x.gif" alt="">';
   echo '<span class="count">'.number_format($troops['u'.$i]).'</span>';
   echo '</div>';

   
   $pos += $gap;
 }
}

if($troops['hero'] > 0){
 echo '<div class="troopFixed" style="top:'.$pos.'%; left:10px;">';
 echo '<img class="unit uhero" src="img/x.gif" alt="">';
 echo '<span class="count">'.$troops['hero'].'</span>';
 echo '</div>';
}
?>


