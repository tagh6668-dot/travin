<?php
class Registr {

    function register($username, $password, $email, $tribe, $ref) {
        global $database;

        $time = time();
        $starttime = OPENING;

        $timep = ($starttime < $time) ? $time : $starttime;

        if(OPENING > time()){
            $ptime = OPENING + PROTECTION;
        } else {
            $ptime = time() + PROTECTION;
        }

        $params = [
            'user' => $username,
            'pass' => $password,
            'email' => $email,
            'tribe' => intval($tribe),
            'ref1' => intval($ref),
            'ref2' => intval($ref),
            'timer' => $timep,
            'up' => $timep,
            'ptime' => $ptime,
            'gold' => DEFAULT_GOLD,
            'advtime' => $timep
        ];

        $q = "INSERT INTO users
        (username,password,email,tribe,lastupdate,regtime,ptime,invited,ref,gold,advtime,msg)
        VALUES
        (:user,:pass,:email,:tribe,:up,:timer,:ptime,:ref1,:ref2,:gold,:advtime,1)";

        $database->query($q,$params);

        return $database->get_last_id();
    }


    function checkActivate($act) {
        global $database;

        $q = "SELECT * FROM activate WHERE act = :act";
        $params = ['act'=>$act];

        return $database->query($q,$params);
    }


    function checkAccount($name,$email) {
        global $database;

        $q = "SELECT * FROM activate WHERE username = :name OR email = :email";
        $params = [
            'name'=>$name,
            'email'=>$email
        ];

        return $database->query($q,$params);
    }


    function activate($username, $password, $email, $tribe, $loc, $act, $act2, $ref) {
        global $database;

        $params = [
            'user'=>$username,
            'pass'=>$password,
            'email'=>$email,
            'tribe'=>intval($tribe),
            'time'=>time(),
            'act'=>$act,
            'act2'=>$act2,
            'ref'=>intval($ref),
            'location'=>intval($loc)
        ];

        $q = "INSERT INTO activate
        (username,password,email,tribe,timestamp,act,act2,ref,location)
        VALUES
        (:user,:pass,:email,:tribe,:time,:act,:act2,:ref,:location)";

        $database->query($q,$params);

        return $database->get_last_id();
    }


    function unreg($username) {
        global $database;

        $q = "DELETE FROM activate WHERE username = :user";
        $params = ['user'=>$username];

        $database->query($q,$params);
    }

}

$regme = new Registr;
?>
