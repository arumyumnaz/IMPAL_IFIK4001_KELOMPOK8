<?php


// if(!isset($_SESSION["user"])) header("Location: login.php");


class auth{
    private $db;
    private $error;
    function __construst($db_conn){
        $this->db = $db_conn;
        session_start();
    }

    public function login($username_admin, $password_admin){
        try{
            $stmt = $this->db->prepare("SELECT * FROM adminq WHERE username_admin = :username_admin");
            $stmt->bindParam(":username_admin", $username_admin);
            $stmt->execute();
            $data = $stmt->fetch();

            // if(pass_verify)


        }
    }
}