<?php
    class Registration {
        public $Fname;
        public $Lname;
        public $Email;
        public $Phone;
        public $Password;
        public $Last_login;
        public $Roles;
        public $id;
        public $status;
        private $conn;
        public $IDNumber;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveUSer(){
            $sql = "SELECT * FROM registration WHERE IDNumber = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> IDNumber]);

            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
                $sql = "INSERT INTO registration(`Fullname`,`IDNumber`,`Password`) VALUES(?,?,?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> Fname,$this -> IDNumber,password_hash($this -> Password,PASSWORD_DEFAULT)]);

                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function loginUser(){
            $sql = "SELECT * FROM registration WHERE IDNumber = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> IDNumber]);

            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    $password = $results['Password'];
                    if(password_verify($this -> Password,$password)){
                        $dates = date("Y-m-d H:i:s");
                        $sql = "UPDATE registration SET LastLogin = ? WHERE IDNumber = ?";
                        $query = $this -> conn -> prepare($sql);
                        $query -> execute([$dates,$this -> IDNumber]);
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                return false;
            }
        }

        public function resetPassword()
        {
            $sql = "SELECT * FROM registration WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                $sql = "UPDATE registration SET `passwords` = ?, `status` = ? WHERE `Email` = ?";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([password_hash($this -> Password, PASSWORD_DEFAULT), $this -> status, $this -> Email]);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function getUser(){
            $sql = "SELECT * FROM registration WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);

            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }


        public function updateStatus(){
            $sql = "UPDATE registration SET `status` = ? WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> status,$this -> Email]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>