<?php
    session_start();

    if(isset($SESSION["user"])) {
        header("location:home/index.php");
    }
    else {

        if(isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case '1':
                    $message = "User was created correctly";
                    $class = "alert alert-success";
                    break;
                
                case '2':
                    $message = "User was not inserted";
                    $class = "alert alert-danger";
                    break;

                case '3':
                    $message = "User or password were not correct";
                    $class = "alert alert-danger";
                    break;
            }
        }
    
        require_once "view/partials/headerindex.php";
        require_once "view/index.php";
        require_once "view/partials/footer.php";
    }
?>