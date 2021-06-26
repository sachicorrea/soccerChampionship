<?php
    require_once "../model/City.php";
    $id = $_GET["id"];
    
    $city = new City();
    $cityId = $city->find($id);
    
    require_once "../view/partials/headerall.php";
    require_once "../view/cities/vedit.php";
    require_once "../view/partials/footer.php";
?>