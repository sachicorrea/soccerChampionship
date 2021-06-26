<?php
    require_once "../model/Position.php";
   
    isset($_GET["id"]) ? (int)$_GET["id"] : '';
    $id = $_GET["id"];

    $position_edit = new Position();
    $positionPlayerEdit = $position_edit->find($id);
    //var_dump($positionPlayerEdit);
    
    require_once "../view/partials/headerall.php";
    require_once "../view/position/vedit.php";
    require_once "../view/partials/footer.php";
?>