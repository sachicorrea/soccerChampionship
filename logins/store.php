<?php
    require_once "../model/Login.php";

    $login = new Login();
    $login->user = $_POST["user"];
    $login->password = $_POST["password"];

    if($login->save() > 0) {
        //echo "Team was inserted";
        header("location:../index.php?action=1");
    }

    else {
        //echo "Team was not inserted";
        header("location:../index.php?action=2");
    }
?>