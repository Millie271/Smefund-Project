<?php
    if(isset($_POST['username'])){
        include_once("../database/Database.php");
        include_once("../models/Registration.php");

        $username = $_POST['username'];
        $identification = $_POST['identification'];
        $password = $_POST['password'];

        $conn = new Database();
        $db = $conn -> connection();

        $save_user = new Registration($db);
        $save_user -> Fname = $username;
        $save_user -> IDNumber = $identification;
        $save_user -> Password = $password;

        $save = $save_user -> saveUSer();

        if($save){
            header("Location: ../02_LoginPage.php?success=Account created successfully.");
        }else{
            header("Location: ../03_AccountPage.php?error=Oops! something went wrong, please try again");
        }
    }
?>