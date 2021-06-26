<?php
    require_once "../model/City.php";

    $city = new City();
    $city->id = $_POST["id"];
    $city->name = $_POST["name"];

    //echo $city->update();

    if($city->update() > 0) {
        header("location:index.php?action=3");
    }
    else {
        header("location:index.php?action=4");
    }
?>