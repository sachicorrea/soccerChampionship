<?php
    require_once "../model/Player.php";

    $player_update = new Player();
    $player_update->document = $_POST["player_id"];
    $player_update->name_player = $_POST["player_name"];
    $player_update->position_id = $_POST["player_position"];
    $player_update->team = $_POST["player_team"];
    
    //var_dump($player_update);

    if($player_update->update() > 0) {
        header("location:index.php?action=3");
    }
    else {
        header("location:index.php?action=4");
    }
?>