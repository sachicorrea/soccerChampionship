<?php
    require_once "../model/City.php";
    $city = new City();
    $listCities = $city->all();
    //print_r($listCities);

    if(isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case '1':
                $message = "City was inserted correctly";
                $class = "alert alert-success";
            break;
                
            case '2':
                $message = "City was not inserted";
                $class = "alert alert-danger";
            break;

            case '3':
                $message = "City was updated";
                $class = "alert alert-success";
            break;

            case '4':
                $message = "City was not updated";
                $class = "alert alert-danger";
            break;

            case '5':
                $message = "City was deleted";
                $class = "alert alert-success";
            break;

            case '6':
                $message = "City was not deleted";
                $class = "alert alert-danger";
            break;

            default:
                $message = "Error";
            break;
        }
    }

    require_once "../view/partials/headerall.php";
    require_once "../view/cities/index.php";
    require_once "../view/partials/footer.php";
?>