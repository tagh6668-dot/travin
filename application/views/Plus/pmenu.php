<h1 class="titleInHeader">سیستم پلاس و خرید سکه</h1>
<div class="contentNavi subNavi">
    <div title="" class="container <?php if(!isset($_GET['id']) || $_GET['id'] == 0 || $_GET['id'] == 1) {echo "active";}else{echo "normal";} ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="plus.php" class="tabItem">خرید سکه (طلا)</a></div>
    </div>
    <div title="" class="container <?php if(isset($_GET['id']) && $_GET['id'] == 2) {echo "active";}else{echo "normal";} ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="plus.php?id=2" class="tabItem">خرید نیرو و حیوان</a></div>
    </div>
    <div title="" class="container <?php if(isset($_GET['id']) && $_GET['id'] == 3) {echo "active";}else{echo "normal";} ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="plus.php?id=3" class="tabItem">امکانات پلاس</a></div>
    </div>
    <div title="" class="container <?php if(isset($_GET['id']) && $_GET['id'] == 5) {echo "active";}else{echo "normal";} ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="plus.php?id=5" class="tabItem">کد هدیه</a></div>
    </div>
    <?php if(isset($session) && $session->access == 9){ ?>
    <div title="" class="container <?php if(isset($_GET['id']) && $_GET['id'] == 6) {echo "active";}else{echo "normal";} ?>">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="plus.php?id=6" class="tabItem">مدیریت و ساخت کد</a></div>
    </div>
    <?php } ?>
    <div class="clear"></div>
</div>