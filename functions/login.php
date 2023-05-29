<?php
    if(isset($_POST['username'])){
        include_once("../database/Database.php");
        include_once("../models/Registration.php");
        $username = $_POST['username'];
        $password = $_POST['password'];


        $conn = new Database();
        $db = $conn -> connection();

        $login = new Registration($db);
        $login -> IDNumber = $username;
        $login -> Password = $password;

        $login = $login -> loginUser();

        if($login){
            header("Location: ../05_packages.html");
        }else{
            header("Location: ../02_LoginPage.php?error=Oops! wrong credentials, please try again");
        }
    }
?>