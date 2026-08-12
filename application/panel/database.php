<?php



class adm_DB {

    private $db;

    public function __construct($database){
        $this->db = $database;
    }

    public function LoginA($username,$password){

        $username = trim($username);

        if($username == '' || $password == ''){
            return false;
        }

        $q = "SELECT password FROM users WHERE username = :username AND access >= :access LIMIT 1";

        $row = $this->db->queryFetch($q,[
            'username' => $username,
            'access' => MULTIHUNTER
        ]);

        if(!$row){
            return false;
        }

        $hash = md5($password.mb_convert_case($username,MB_CASE_LOWER,"UTF-8"));

        if(hash_equals($row['password'],$hash)){
            return true;
        }

        return false;
    }

    public function Punish($uid,$reason,$time){

        $uid = intval($uid);
        $time = intval($time);
        $reason = trim($reason);

        $q = "UPDATE users SET punish = :time, punish_reason = :reason WHERE id = :uid";

        return $this->db->query($q,[
            'time'=>$time,
            'reason'=>$reason,
            'uid'=>$uid
        ]);
    }

    public function DelPlayer($uid){

        $uid = intval($uid);

        if($uid <= 0){
            return false;
        }

        $this->db->query("DELETE FROM users WHERE id = :id",['id'=>$uid]);
        $this->db->query("DELETE FROM villages WHERE owner = :id",['id'=>$uid]);
        $this->db->query("DELETE FROM units WHERE vref IN (SELECT wref FROM villages WHERE owner = :id)",['id'=>$uid]);
        $this->db->query("DELETE FROM attacks WHERE attacker = :id OR defender = :id",['id'=>$uid]);

        return true;
    }

    public function search_player($player){

        $player = trim($player);

        if($player == ''){
            return [];
        }

        $q = "SELECT id,username FROM users WHERE username LIKE :player LIMIT 50";

        return $this->db->queryFetchAll($q,[
            'player' => "%".$player."%"
        ]);
    }

    public function search_email($email){

        $email = trim($email);

        if($email == ''){
            return [];
        }

        $q = "SELECT id,username,email FROM users WHERE email LIKE :email LIMIT 50";

        return $this->db->queryFetchAll($q,[
            'email' => "%".$email."%"
        ]);
    }

    public function search_village($village){

        $village = trim($village);

        if($village == ''){
            return [];
        }

        $q = "SELECT wref,name,owner FROM villages WHERE name LIKE :village LIMIT 50";

        return $this->db->queryFetchAll($q,[
            'village' => "%".$village."%"
        ]);
    }

    public function search_alliance($alliance){

        $alliance = trim($alliance);

        if($alliance == ''){
            return [];
        }

        $q = "SELECT id,name FROM alidata WHERE name LIKE :alliance LIMIT 50";

        return $this->db->queryFetchAll($q,[
            'alliance' => "%".$alliance."%"
        ]);
    }

    public function search_ip($ip){

        $ip = trim($ip);

        if($ip == ''){
            return [];
        }

        $q = "SELECT id,username,ip FROM users WHERE ip LIKE :ip LIMIT 50";

        return $this->db->queryFetchAll($q,[
            'ip' => "%".$ip."%"
        ]);
    }
    
    
    public function getUserActive(){

    $q = "SELECT COUNT(*) as num FROM users WHERE timestamp > :time";

    $time = time() - 300; // 5 minutes

    $row = $this->db->queryFetch($q,[
        'time' => $time
    ]);

    return $row['num'];
}


}



$admin = new adm_DB($database);


include("../application/panel/function.php");