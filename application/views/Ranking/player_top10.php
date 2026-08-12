   
   
   
   
   <?php
$LM = $sData['lastmedal'];
$ME = time()-$LM; 
$m =MEDALS-$ME;
?>

<div id="allianceBonusWrapper">
    <div class="roundedCornersBox bonusBox" id="bonusInfo0">
        <h4>
            <button type="button" class="icon bonusCollapse" ref="bonusInfo0">
                <img src="/img/x.gif" class="openedClosedSwitch switchOpened" alt="openedClosedSwitch switchClosed">
            </button>
            <span style="font-size: 14px;"><strong>جوایز تاپ تن 😍</strong></span>
        </h4>
        <div class="bonusInfo collapsed bonusInfo0">
            <table cellpadding="1" cellspacing="1">
                <thead>
                    <tr>
                        <th>جایزه</th>
                        <th>نفر ۱</th>
                        <th>نفر ۲</th>
                        <th>نفر ۳</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b> مهاجمین هقته</b></td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N1;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N2;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N3;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                    </tr>
                    <tr>
                        <td><b> مدافعین هقته</b></td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N1;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N2;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N3;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                    </tr>
                    <tr>
                        <td><b>پیشرفت کننده های هقته</b></td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N1;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N2;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N3;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                    </tr>
                    <tr>
                        <td><b>غارتگران هقته</b></td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N1;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N2;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                        <td style="background-color: palegoldenrod">
                            <b><?=TOP10N3;?></b> <img src="/img/x.gif" class="gold" alt="gold">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p>
                اهدای مدال ها تا <span class="timer " counting="down" value="<?=$m;?>">00:00:??</span> ساعت دیگر. </p>
            <p class="warning" style="font-weight: bold">اهدا جوایز نفرات برتر بعد از اهدای مدال های تاپ تن انجام می شود.</p>
            <div class="clear"></div>
        </div>
    </div>
</div>
   
   
   
   
   
   
    <?php

               //  $ranking->PlayerClimber();
    for($i=1;$i<=0;$i++) {
    echo "Row ".$i;
    }


    $result = $database->GetForUserTop("ap");
    $result2 = $database->GetForUserTop("ap",$session->uid);
    include("player_menu.php");
    ?>
    <div id="statLeft" class="top10Wrapper">
    <h4 class="round small  top top10_offs"><?php echo MEDAL1; ?> <?php echo DNYA; ?></h4>
    <table cellpadding="1" cellspacing="1" id="top10_offs" class="top10 row_table_data">
	<thead>
		<tr>
			<td>№</td>
			<td><?php echo OVERVIEW1; ?></td>
			<td><?php echo STATISTIC6; ?></td>
		</tr>
	</thead>
	<tbody>
<?php         $place="?";
    foreach($result as $row)
      {
	  if($row['id']==$session->uid) {
	  	$place=$i;
	  echo "<tr class=\"own hl\">"; } else { echo "<tr>"; }
      echo "<td class=\"ra fc\">".$i++.".&nbsp;</td>";
      echo "<td class=\"pla\"><a href='spieler.php?uid=".$row['id']."'>".$database->RemoveXSS($row['username'])."</a></td>";
      echo "<td class=\"val lc\">".$row['ap']."</td>";
      echo "</tr>";
      }
?>
		 <tr>
			<td colspan="3" class="empty"></td>
		</tr>
<?php
   $row = $result2[0];
      echo "<tr class=\"none\">";
      echo "<td class=\"ra fc\">$place.&nbsp;</td>";
      echo "<td class=\"pla\">".$database->RemoveXSS($row['username'])."</td>";
      echo "<td class=\"val lc\">".$row['ap']."</td>";
      echo "</tr>";

?>
         </tbody>
</table>
        <br/>

        <h4 class="round small  top top10_climbers"><?php echo MEDAL3; ?> <?php echo DNYA; ?></h4>
        <?php
        for($i=1;$i<=0;$i++) {
            echo "Row ".$i;
        }
        $result = $database->GetForUserTop("clp");
        $result2 = $database->GetForUserTop("clp",$session->uid);
        ?>


        <table cellpadding="1" cellspacing="1" id="top10_climbers" class="top10 row_table_data">
            <thead>

            <tr>
                <td>№</td>
                <td><?php echo OVERVIEW1; ?></td>
                <td><?php echo OVERVIEW4;?></td>
            </tr>
            </thead>
            <tbody>
            <?php            $place="?";
            foreach($result as $row)
            {
                if($row['id']==$session->uid) {
                    $place=$i;
                    echo "<tr class=\"own hl\">"; } else { echo "<tr>"; }
                echo "<td class=\"ra fc\">".$i++.".&nbsp;</td>";
                echo "<td class=\"pla\"><a href='spieler.php?uid=".$row['id']."'>".$database->RemoveXSS($row['username'])."</a></td>";
                echo "<td class=\"val lc\">".$row['clp']."</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td colspan="3" class="empty"></td>
            </tr>
            <?php
            $row = $result2[0];


            echo "<tr class=\"none\">";
            echo "<td class=\"ra fc\">$place.&nbsp;</td>";
            echo "<td class=\"pla\">".$database->RemoveXSS($row['username'])."</td>";
            echo "<td class=\"val lc\">".$row['clp']."</td>";
            echo "</tr>";

            ?>
            </tbody>
        </table>
<br/>

    </div>

    <div id="statRight" class="top10Wrapper">
    <?php
    for($i=1;$i<=0;$i++) {
        echo "Row ".$i;
    }
    $result = $database->GetForUserTop("dp");
    $result2 = $database->GetForUserTop("dp",$session->uid);?>

        <h4 class="round small top top10_defs"><?php echo MEDAL2; ?> <?php echo DNYA; ?></h4>
    <table cellpadding="1" cellspacing="1" id="top10_defs" class="top10 row_table_data">
        <thead>

        <tr>
            <td>№</td>
            <td><?php echo OVERVIEW1; ?></td>
            <td><?php echo STATISTIC6; ?></td>
        </tr>
        </thead>
        <tbody>
        <?php        $place="?";
        foreach($result as $row)
        {
            if($row['id']==$session->uid) {
                $place=$i;
                echo "<tr class=\"own hl\">"; } else { echo "<tr>"; }
            echo "<td class=\"ra fc\">".$i++.".&nbsp;</td>";
            echo "<td class=\"pla\"><a href='spieler.php?uid=".$row['id']."'>".$database->RemoveXSS($row['username'])."</a></td>";
            echo "<td class=\"val lc\">".$row['dp']."</td>";
            echo "</tr>";
        }
        ?>

        <tr>
            <td colspan="3" class="empty"></td>
        </tr>
        <?php
        $row = $result2[0];
        echo "<tr class=\"none\">";
        echo "<td class=\"ra fc\">$place.&nbsp;</td>";
        echo "<td class=\"pla\">".$database->RemoveXSS($row['username'])."</td>";
        echo "<td class=\"val lc\">".$row['dp']."</td>";
        echo "</tr>";

        ?>
        </tbody>
    </table>



<?php
    for($i=1;$i<=0;$i++) {
    echo "Row ".$i;
    }
    $result = $database->GetForUserTop("RR");
    $result2 = $database->GetForUserTop("RR",$session->uid);
?>
        <h4 class="round small spacer top top10_raiders"><?php echo MEDAL4; ?> <?php echo DNYA; ?></h4>
<table cellpadding="1" cellspacing="1" id="top10_defs" class="top10 row_table_data">
	<thead>
		<tr>
			<td>№</td>
			<td><?php echo OVERVIEW1; ?></td>
			<td><?php echo STATISTIC18; ?></td>
		</tr>
	</thead>
	<tbody>
<?php
$place="?";
    foreach($result as $row)
      {
	  if($row['id']==$session->uid) {
	  	$place=$i;
	  echo "<tr class=\"own hl\">"; } else { echo "<tr>"; }
      echo "<td>".$i++.".&nbsp;</td>";
      echo "<td><a href='spieler.php?uid=".$row['id']."'>".$database->RemoveXSS($row['username'])."</a></td>";
      echo "<td>".$row['RR']."</td>";
      echo "</tr>";
      }
?>
		 <tr>
			<td colspan="3" class="empty"></td>
		</tr>
<?php
   $row = $result2[0];
		echo "<tr class=\"none\">";
      echo "<td class=\"ra fc\">$place.&nbsp;</td>";
		echo "<td class=\"pla\">".$database->RemoveXSS($row['username'])."</td>";
      echo "<td class=\"val lc\">".$row['RR']."</td>";
      echo "</tr>";



?>
         </tbody>
</table>

    </div>
    <div class="clear">&nbsp;</div>
