<?php
    require_once "../model/Player.php";
    
    $player = new Player();
    $listPlayers = $player->all();
    //print_r($listPlayers);

    if(isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case '1':
                $message = "Player was inserted correctly";
                $class = "alert alert-success";
                break;
            
            case '2':
                $message = "Player was not inserted";
                $class = "alert alert-danger";
                break;

            case '3':
                $message = "Player was updated";
                $class = "alert alert-success";
            break;

            case '4':
                $message = "Player was not updated";
                $class = "alert alert-danger";
            break;

            case '5':
                $message = "Player was deleted";
                $class = "alert alert-success";
            break;

            case '6':
                $message = "Player was not deleted";
                $class = "alert alert-danger";
            break;
    
            default:
                $message = "Error";
            break;
        }
    }

    require_once "../view/partials/headerall.php";
    require_once "../view/players/index.php";
    require_once "../view/partials/footer.php";
?>
