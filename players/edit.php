<?php
    require_once "../model/Player.php";
    require_once "../model/Team.php";
    require_once "../model/Position.php";
    
    isset($_GET["id"]) ? (int)$_GET["id"] : '';
    $id = $_GET["id"];
    
    $player_edit = new Player();
    $playerIdEdit = $player_edit->find($id);
    //var_dump($playerIdEdit);

    $position = new Position();
    $listPosition = $position->all();

    $team = new Team();
    $listTeam = $team->all();
    
    require_once "../view/partials/headerall.php";
    require_once "../view/players/vedit.php";
    require_once "../view/partials/footer.php";
?>