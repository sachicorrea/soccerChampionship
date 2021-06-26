<?php
    require_once "../model/Team.php";

    $team = new Team();
    $team->team_name = $_POST["name"];
    $team->manager = $_POST["manager"];
    $team->city_id = $_POST["city_team"];
    //var_dump($team->city_team);

    if($team->save() > 0) {
        //echo "Team was inserted";
        header("location:index.php?action=1");
    }
    else {
        //echo "Team was not inserted";
        header("location:index.php?action=2");
    }
?>