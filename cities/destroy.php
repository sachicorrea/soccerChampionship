<?php
    require_once "../model/City.php";

    $city = new City();
    $city->id = $_GET["id"];

    if($city->delete() > 0) {
        header("location:index.php?action=5");
    }
    else {
        header("location:index.php?action=6");
    }
?>