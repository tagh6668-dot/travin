<?php
class adminFunc{

  function CheckLogin(){
      global $session;

      if(!isset($session) || !isset($session->access) || $session->access < 9){
          header("HTTP/1.1 403 Forbidden");
          exit;
      }
      return true;
  }

  function Act($get){
    global $admin;

    $action = isset($get['action']) ? $get['action'] : '';

    switch($action){

      case 'recountPop':
        $did = isset($get['did']) ? intval($get['did']) : 0;
        if($did > 0){
            $admin->recountPop($did);
        }
      break;

      case 'recountCp':
        $did = isset($get['did']) ? intval($get['did']) : 0;
        if($did > 0){
            $admin->recountCp($did);
        }
      break;

      case 'recountPopUsr':
        $uid = isset($get['uid']) ? intval($get['uid']) : 0;
        if($uid > 0){
            $admin->recountPopUser($uid);
        }
      break;

      case 'StopDel':
        $uid = isset($get['uid']) ? intval($get['uid']) : 0;
        if($uid > 0){
            $admin->StopDelPlayer($uid);
        }
      break;

      case 'delVil':
        $did = isset($get['did']) ? intval($get['did']) : 0;
        if($did > 0){
            $admin->DelVillage($did);
        }
      break;

      case 'delBan':
        $uid = isset($get['uid']) ? intval($get['uid']) : 0;
        $id  = isset($get['id']) ? intval($get['id']) : 0;
        if($uid > 0 && $id > 0){
            $admin->DelBan($uid,$id);
        }
      break;

      case 'addBan':

        $uid = isset($get['uid']) ? $get['uid'] : '';
        $time = isset($get['time']) ? intval($get['time']) : 0;
        $reason = isset($get['reason']) ? htmlspecialchars($get['reason'],ENT_QUOTES,'UTF-8') : '';

        if($time > 0){
            $end = time() + $time;
        } else {
            $end = '';
        }

        if(!is_numeric($uid)){
            $uid = $admin->getUserField($uid,'id',1);
        } else {
            $uid = intval($uid);
        }

        if($uid > 0){
            $admin->AddBan($uid,$end,$reason);
        }

      break;

      case 'delOas':
        // oaza
      break;

      case 'logout':
        $this->LogOut();
      break;
    }

    if($action == 'logout'){
        header("Location: admin.php");
        exit;
    }else{
        header("Location: admin.php");
        exit;
    }
  }

  function Act2($post){
    global $admin;

    $action = isset($post['action']) ? $post['action'] : '';

    switch($action){

      case 'DelPlayer':
        $uid  = isset($post['uid']) ? intval($post['uid']) : 0;
        $pass = isset($post['pass']) ? $post['pass'] : '';
        if($uid > 0){
            $admin->DelPlayer($uid,$pass);
        }
        header("Location: ?p=search&msg=ursdel");
        exit;
      break;

      case 'punish':
        $admin->Punish($post);
        header("Location: admin.php");
        exit;
      break;

      case 'addVillage':
        $admin->AddVillageA($post);
        header("Location: admin.php");
        exit;
      break;

      case 'addTroops':
        $admin->changeTroops($post);
        header("Location: admin.php");
        exit;
      break;
    }
  }

  public function procResType($ref) {
        global $lang;

        if(isset($lang['buildings'][$ref])){
            $build = $lang['buildings'][$ref];
        } else {
            $build = "Ошибка";
        }

        return $build;
  }

}

$funct = new adminFunc;

if($funct->CheckLogin()){

  if(isset($_GET['action'])){
      $funct->Act($_GET);
  }

  if(isset($_POST['action'])){
      $funct->Act2($_POST);
  }

}
