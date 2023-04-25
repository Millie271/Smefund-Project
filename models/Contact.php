<?php
    class Contacts {
        public $Fullname;
        public $Email;
        public $Phone;
        public $message;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveContact()
        {
            $sql = "INSERT INTO Contacts(Fullname,Email,Phone,Message) VALUES(?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query ->  execute([$this -> Fullname,$this -> Email,$this -> Phone, $this -> message]);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>