<?php
    class Records {
        public $Fullname;
        public $IDNumber;
        public $Phone;
        public $PAddress;
        public $Email;
        public $JobTitle;
        public $Diability;
        public $Gender;

        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveRecords()
        {
            $sql = "INSERT INTO records(Fullname,IDNumber,Phone,PAddress,Email,JobTitle,Diability,Gender) VALUES(?,?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Fullname,$this -> IDNumber,$this -> Phone,$this -> PAddress,$this -> Email,$this -> JobTitle,$this -> Diability,$this -> Gender]);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>