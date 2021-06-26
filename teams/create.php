<?php
    require_once "../model/City.php";
    $city = new City();
    $listCities = $city->all(); // To collect cities' names from class City

    require_once "../view/partials/headerall.php";
    require_once "../view/teams/vcreate.php";
    require_once "../view/partials/footer.php";
?>