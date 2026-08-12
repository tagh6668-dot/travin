<?php
class Admin{

    function emptyO(){
        global $database, $session;

        if(!isset($session->access) || $session->access != 9){
            return false;
        }

        $oases = $database->query("SELECT wref FROM odata WHERE conqured = 0");

        foreach($oases as $oasis){
            $vref = intval($oasis['wref']);
            $database->query("UPDATE units SET
                u1=0,u2=0,u3=0,u4=0,u5=0,
                u6=0,u7=0,u8=0,u9=0,u10=0
                WHERE vref = $vref");
        }
    }

    function deleteMsg($id){
        global $database, $session;

        if(!isset($session->access) || $session->access < 9){
            return false;
        }

        $id = intval($id);
        $database->query("DELETE FROM mdata WHERE id = $id");
    }

    function sUpdate($key, $value){
        global $database, $session;

        if(!isset($session->access) || $session->access < 9){
            return false;
        }

        $allowed = ['speed','server_name','start_time','gold'];

        if(!in_array($key,$allowed)){
            return false;
        }

        $value = addslashes($value);

        $database->query("UPDATE config SET $key = '$value'");
    }

}

$panel = new Admin;
?>
