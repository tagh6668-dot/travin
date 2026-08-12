
<script>
document.addEventListener("DOMContentLoaded", function(){

    const btn   = document.getElementById("prodBtn");
    const panel = document.getElementById("prodPanel");

    // دکمه باز/بسته کردن
    btn.addEventListener("click", function (e) {
        e.stopPropagation();     // جلوگیری از بسته شدن اشتباهی
        panel.classList.toggle("open");
    });

    // کلیک روی صفحه → بسته شود
    document.addEventListener("click", function(e){
        if (!panel.contains(e.target) && !btn.contains(e.target)) {
            panel.classList.remove("open");
        }
    });

});
</script>


<button id="prodBtn">🌾 </button>

<div id="prodPanel">

<?php
$prods = [
    ["icon"=>"r1","value"=>$village->getProd("wood"), "bonus"=>$session->bonus1],
    ["icon"=>"r2","value"=>$village->getProd("clay"), "bonus"=>$session->bonus2],
    ["icon"=>"r3","value"=>$village->getProd("iron"), "bonus"=>$session->bonus3],
    ["icon"=>"r4","value"=>$village->getProd("crop"), "bonus"=>$session->bonus4],
];

foreach($prods as $p){

    echo '<div class="prodItem">';

    echo '<i class="'.$p["icon"].'"></i>';

    echo '<span class="num">'.number_format($p["value"]).'</span>';

    if($p["bonus"]) {
        echo '<img src="img/x.gif" class="productionBoost">';
    }

    echo '</div>';
}
?>

</div>






<script type="text/javascript" id="buttonP2gQFPKZoe3Fm_script">
    window.addEvent('domready', function()
        {
        if($('buttonP2gQFPKZoe3Fm'))
        {
          $('buttonP2gQFPKZoe3Fm').addEvent('click', function ()
          {
            window.fireEvent('buttonClicked', [this, {"name":"","onclick":"","confirm":"","productionBoostDialog":{"infoIcon":"http:\/\/t4.answers.travian.ir\/index.php?aid=0#go2answer"},"title":"\u0645\u0632\u064a\u062f \u0645\u0646 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0639\u0646 \u0632\u064a\u0627\u062f\u0629 \u0627\u0644\u0625\u0646\u062a\u0627\u062c","id":"buttonP2gQFPKZoe3Fm"}]);
          });
        }
        });
    </script>    
</div>