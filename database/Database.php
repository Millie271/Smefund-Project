<?php
    class Database {
        private $db_host;
        private $db_user;
        private $db_password;
        private $db_name;
        private $conn;


        public function __construct()
        {
            $this -> db_host     = "127.0.0.1";
            $this -> db_user     = "root";
            $this -> db_password = "";
            $this -> db_name     = "smefund";

        }

        public function connection()
        {
            $sql = "mysql:host=".$this -> db_host.";dbname=".$this -> db_name;
            $db = new PDO($sql,$this -> db_user,$this -> db_password);
            if($db){
                $this -> conn = $db;
                return $this -> conn;
            }else{
                return false;
            }
        }
    }
?>