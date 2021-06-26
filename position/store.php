<?php
    require_once "../model/Position.php";

    $position_player = new Position();
    $position_player->name = $_POST["player_name"];
    
    if($position_player->save() > 0) {
        header("location:index.php?action=1");
    }
    else {
        header("location:index.php?action=2");
    }
?>