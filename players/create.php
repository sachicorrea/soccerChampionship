<?php
    require_once "../model/Position.php";
    $position = new Position();
    $listPosition = $position->all(); // To collect teams from Position class

    require_once "../model/Team.php";
    $team = new Team();
    $listTeam = $team->all();

    require_once "../view/partials/headerall.php";
    require_once "../view/players/vcreate.php";
    require_once "../view/partials/footer.php";
?>