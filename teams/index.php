<?php
    require_once "../model/Team.php";
    
    $team = new Team();
    $listTeams = $team->all();
    //print_r($listTeams);

    if(isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case '1':
                $message = "Team was inserted correctly";
                $class = "alert alert-success";
                break;
            
            case '2':
                $message = "Team was not inserted";
                $class = "alert alert-danger";
                break;

            case '3':
                $message = "Team was updated";
                $class = "alert alert-success";
            break;

            case '4':
                $message = "Team was not updated";
                $class = "alert alert-danger";
            break;

            case '5':
                $message = "Team was deleted";
                $class = "alert alert-success";
            break;

            case '6':
                $message = "Team was not deleted";
                $class = "alert alert-danger";
            break;
    
            default:
                $message = "Error";
            break;
        }
    }

    require_once "../view/partials/headerall.php";
    require_once "../view/teams/index.php";
    require_once "../view/partials/footer.php";
?>
