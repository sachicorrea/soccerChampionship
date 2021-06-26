<?php
    require_once "../model/Team.php";
    require_once "../model/City.php";
    
    isset($_GET["id"]) ? (int)$_GET["id"] : '';
    $id = $_GET["id"];
    
    $team_edit = new Team();
    $teamIdEdit = $team_edit->find($id);
    var_dump($teamIdEdit);

    $city = new City();
    $listCities = $city->all();
    
    require_once "../view/partials/headerall.php";
    require_once "../view/teams/vedit.php";
    require_once "../view/partials/footer.php";
?>