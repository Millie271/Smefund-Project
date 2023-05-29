
    <!-- class Uploadsolodocs {
        public $ID;
        public $Birthcert;
        public $Bankstatement;
        public $Businessplan;
        public $Businesspermit;
        public $GuarantorID;

        

        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveUploadsolodocs()
        {
            $sql = "INSERT INTO records(ID,Birthcert,Bankstatement,Businessplan,Businesspermit,GuarantorID,) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> ID,$this -> Birthcert,$this -> Bankstatement,$this -> Businessplan,$this -> Businesspermit,$this -> GuarantorID,$this]);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?> -->