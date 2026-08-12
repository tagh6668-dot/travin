<?php
include('application/Account.php');

if(!isset($_GET['code'])){
    $pData = array(
        'BClass' => 'activate',
        'CClass' => 'activate',
    );

    $Token = isset($_GET['token']) ? $database->filterstringvalue($_GET['token']) : '';
    $actData = $database->queryFetch('SELECT * FROM activate WHERE `password` = "'.$Token.'"');
    
    if(empty($actData['id']) && empty($_SESSION['usrname'])){
        header('Location: login.php'); 
        exit(); 
    }else{
        if(empty($_SESSION['usrname']) && !empty($actData['username'])){
            $_SESSION['usrname'] = $actData['username'];
        }
    }
    

    require_once("application/views/html.php");
    require_once("application/views/main/Top_Out.php");
    require_once("application/views/menu.php");

    if(!isset($_SESSION['step']) || !$_SESSION['step']) {
        $_SESSION['step'] = 1;
    }

    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'vid': $_SESSION['step'] = 1; break; 
            case 'sector': $_SESSION['step'] = 2; break; 
            case 'confirmation': $_SESSION['step'] = 3; break; 
        }
    }

    switch($_SESSION['step']){
        
        // Select Tribe
        case 1: 
            if(!empty($_POST)){
                TRI5BES ? $vids = array(1,2,3,6,7) : $vids = array(1,2,3);

                $vid = isset($_POST['vid']) ? intval($_POST['vid']) : 0;

                if(in_array($vid, $vids)){
                    $_SESSION['step'] = 2;
                    $_SESSION['vid'] = $vid;

                    header('Location: activate.php?page=sector');
                    exit();
                }  
            }
            require_once("application/views/activate/Tribes.php"); 
        break;

        // Select Sector
        case 2:
            if(empty($_SESSION['vid'])){
                $_SESSION['step'] = 1; 
                header('Location: activate.php?page=vid'); 
                exit(); 
            }

            if(!empty($_POST)){
                $sector = isset($_POST['sector']) ? $_POST['sector'] : '';

                if(in_array($sector, array('nw','no','sw','so'))){
                    $_SESSION['step'] = 3;
                    $_SESSION['sector'] = $sector;

                    header('Location: activate.php?page=confirmation');
                    exit();
                }  
            }
            require_once("application/views/activate/Sectors.php"); 
        break;

        // Confirmation
        case 3:
            if(empty($_SESSION['vid']) || empty($_SESSION['sector'])){ 
                $_SESSION['step'] = 1; 
                header('Location: activate.php?page=vid'); 
                exit(); 
            }
            
            if(!empty($_POST)){
                $vid = intval($_SESSION['vid']);
                $username = $database->filterstringvalue($_SESSION['usrname']);

                $database->query("UPDATE activate set tribe=".$vid." where `username`='".$username."'");

                switch($_SESSION['sector']) {
                    default: $sector = "1"; break;
                    case "no": $sector = "3"; break;
                    case "nw": $sector = "4"; break;
                    case "sw": $sector = "1"; break;
                    case "so": $sector = "2"; break;
                }

                $database->query("UPDATE activate set location=".$sector." where `username`='".$username."'");

                $_SESSION['username'] = $_SESSION['usrname'];

                $account->Activate();
            }
            
            require_once("application/views/activate/Confirm.php"); 
        break;
    }

    require_once("application/views/footer.php");

}else{

    if(!empty($_GET['ref'])){
        $inviter = $database->filterstringvalue($_GET['ref']);
    }

?>

<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV1">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="img/x.gif" id="msfilter" alt=""/>
        <div id="header">
            <div id="mtop">
                <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div id="center">
            <?php include('application/views/menu.php');?>
            <div id="contentOuterContainer" class="size1">
                <div class="contentTitle">&nbsp;</div>
                <div class="contentContainer">
                    <div id="content" class="signup"><h1 class="titleInHeader">Sign up</h1>

<?php
	include("application/views/activate/activate.php");
?>

<div class="clear"></div>
                </div>
                <div class="contentFooter">&nbsp;</div>
            </div>

        </div>

    </div>
    <div id="ce"></div></div></div>

</body>
</html>
<?php } ?>
