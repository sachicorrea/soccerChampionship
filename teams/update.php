<?php
    require_once "../model/Team.php";

    $team_update = new Team();
    $team_update->team_id = $_POST["team_id"];
    $team_update->team_name = $_POST["team_name"];
    $team_update->manager = $_POST["manager"];
    $team_update->city_id = $_POST["city_team"];
    //var_dump($team_update->city_id);
    //echo $team_update->update();

    if($team_update->update() > 0) {
        header("location:index.php?action=3");
    }
    else {
        header("location:index.php?action=4");
    }
?>