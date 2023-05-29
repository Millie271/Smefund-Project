<?php
    if(isset($_POST['Fullname'])){
        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
        include_once("../database/Database.php");
        include_once("../models/Records.php");

        $conn = new Database();
        $db = $conn -> connection();

        $records = new Records($db);
        $records -> Fullname = $_POST['Fullname'];
        $records -> IDNumber = $_POST['idnumber'];
        $records -> Phone = $_POST['phonenumber'];
        $records -> PAddress = $_POST['address'];
        $records -> Email = $_POST['emailaddress'];
        $records -> JobTitle = $_POST['jobtitle'];
        $records -> Businessname = $_POST['Businessname'];
        $records -> Goods = $_POST['Goods'];
        $records -> Phonenumber = $_POST['Phonenumber'];
        $records -> Address = $_POST['Address'];
        $records -> Emailaddress = $_POST['Emailaddress'];
        $records -> Businesstype = $_POST['Businesstype'];
        $records -> Grosssales = $_POST['Grosssales'];

        // $gender = "";
        // if($_POST['gender'] == "on"){
        //     $gender = "Male";
        // }else{
        //     $gender = "Female";
        // }
        $records -> Diability = $_POST['Disability'];
        $records -> Gender = $_POST['gender'];
        // echo $_POST['gender'];
        $save = $records -> saveRecords();

        if($save){
            // echo "<script>alert('application was successfull')</script>";
            // echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
            header("Location: ../06_UploadSoloDocs.html");
        }else{
            // echo "<script>alert('Oops! something went wrong, please try again.')</script>";
            // echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
            header("Location: ../04_ApplicationDetails.html");
        }
    }
?>