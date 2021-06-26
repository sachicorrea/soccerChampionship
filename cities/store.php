<?php
    require_once "../model/City.php";

    $city = new City();
    $city->name = $_POST["name"];
    
    if($city->save() > 0) {
        header("location:index.php?action=1");
    }
    else {
        header("location:index.php?action=2");
    }
?>