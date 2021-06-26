<?php 
    session_start();
    require_once "model/Login.php";

    $login = new Login();
    $login->user = $_POST["user"];
    $login->password = $_POST["password"];

    if($login->validate_user() == null) {
        header("location:index.php?action=3");
    }
    else {
        $_SESSION["user"] = $_POST["user"];
        header("location:home/index.php");
    }
?>