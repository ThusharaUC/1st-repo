<?php

class USER {
    private $db;

    function __construct($db_con){
        $this->db = $db_con;
    }

    public function signup($fname,$lname,$email,$nic,$title,$mob_no){
        try {
            $def_pass= "welcome@123";
            $new_pass = password_hash($def_pass, PASSWORD_DEFAULT);

            $stmtu = $this->db->prepare("INSERT INTO login(u_name,E_password) VALUES('$uname','$new_pass')");
            $stmtu->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function login($uemail,$upass){
        try{
            $stmt = $this->db->prepare("SELECT * FROM login WHERE u_name= '$uemail'");
            $stmt->execute();
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() > 0){
                if(password_verify($upass,$userRow['password'])){
                    $_SESSION['user_session'] = $userRow['u_name'];
                    return true;
                }
            }
            else{
                return false;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function is_loggedin(){
        if(isset($_SESSION['user_session'])){
            return true;
        }
    }

    public function redirect($url){
        header("Location: $url");
    }

    public function logout(){
        unset($_SESSION['user_session']);
        $_SESSION['user_session'] = false;
        session_destroy();
        return true;
    }

    public function user_details($user_id){
        $stmt = $this->db->prepare("SELECT * FROM employee WHERE E_nic = '$user_id'");
        $stmt->execute();
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $userRow;
    }
    public function unread_messages($user_id){
        $stmt = $this->db->prepare("SELECT * FROM message WHERE to_user = '$user_id' AND read_status = 'no'");
        $stmt->execute();
        $msgcount = $stmt->rowCount();
        return $msgcount;
    }

}
