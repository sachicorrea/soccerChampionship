<?php
    require_once "../model/Player.php";

    $players = new Player();
    $players->document = $_POST["player_document"];
    $players->name_player = $_POST["player_name"];
    $players->position_id = $_POST["player_position"];
    $players->team = $_POST["player_team"];

    if($players->save() > 0) {
        //echo "Team was inserted";
        header("location:index.php?action=1");
    }

    else {
        //echo "Team was not inserted";
        header("location:index.php?action=2");
    }
?>