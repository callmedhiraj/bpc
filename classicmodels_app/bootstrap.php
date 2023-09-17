<?php
//load the URL page and action values
$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($page){
    case 'office':
        if($action == 'add'){
            //show a form
        $page_to_load = "includes/add_office.php";
        }else if($action == 'view'){
        $page_to_load = "includes/view_office.php";
        }

        break;
    default:
    $page_to_load = "includes/welcome.php";
}
?>
