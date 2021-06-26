<?php
    require_once "../model/Position.php";

    $position_update = new Position();
    $position_update->position_id = $_POST["position_id"];
    $position_update->name = $_POST["position_name"];

    //echo $positionUpdate->update();

    if($position_update->update() > 0) {
        header("location:index.php?action=3");
    }
    else {
        header("location:index.php?action=4");
    }
?>