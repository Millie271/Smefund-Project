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
        public $Businessname;
        public $Goods;
        public $Phonenumber;
        public $Address;
        public $Emailaddress;
        public $Businesstype;
        public $Grosssales;
        

        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveRecords()
        {
            $sql = "INSERT INTO records(Fullname,IDNumber,Phone,PAddress,Email,JobTitle,Diability,Gender,Businessname,Goods,Phonenumber,Address,Emailaddress,Businesstype,Grosssales) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Fullname,$this -> IDNumber,$this -> Phone,$this -> PAddress,$this -> Email,$this -> JobTitle,$this -> Diability,$this -> Gender,$this -> Businessname,$this -> Goods,$this -> Phonenumber,$this -> Address,$this -> Emailaddress,$this -> Businesstype,$this -> Grosssales]);

            if($query){
                return true;
            }else{
                return false;
            }
        }

        
// ADMINPORTAL
        public function getRecords()
        {
            $sql = "SELECT * FROM records ORDER BY id DESC";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();

            if($query -> rowCount() > 0){
                while($results = $query ->  fetchAll(PDO::FETCH_ASSOC)){ return $results; }
            }else{
                return false;
            }
        }

    }
?>