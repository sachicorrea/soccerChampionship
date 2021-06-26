<?php
    require_once "../model/Position.php";
    
    $position = new Position();
    $listPosition = $position->all();
    //print_r($listPosition);

    if(isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case '1':
                $message = "Position was inserted correctly";
                $class = "alert alert-success";
            break;
                
            case '2':
                $message = "Position was not inserted";
                $class = "alert alert-danger";
            break;

            case '3':
                $message = "Position was updated";
                $class = "alert alert-success";
            break;

            case '4':
                $message = "Position was not updated";
                $class = "alert alert-danger";
            break;

            case '5':
                $message = "Position was deleted";
                $class = "alert alert-success";
            break;

            case '6':
                $message = "Position was not deleted";
                $class = "alert alert-danger";
            break;

            default:
                $message = "Error";
            break;
        }
    }

    require_once "../view/partials/headerall.php";
    require_once "../view/position/index.php";
    require_once "../view/partials/footer.php";
?>