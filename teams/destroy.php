<?php
    require_once "../model/Team.php";

    $team_delete = new Team();
    $team_delete->team_id = $_GET["id"];

    if($team_delete->delete() > 0) {
        header("location:index.php?action=5");
    }
    else {
        header("location:index.php?action=6");
    }
?>