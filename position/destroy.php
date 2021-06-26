<?php
    require_once "../model/Position.php";

    $position_delete = new Position();
    $position_delete->position_id = $_GET["id"];

    if($position_delete->delete() > 0) {
        header("location:index.php?action=5");
    }
    else {
        header("location:index.php?action=6");
    }
?>