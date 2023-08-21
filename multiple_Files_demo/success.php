<?php
if(isset($_GET['message']) && $_GET['message'] == "success"){
    header('location: dashboard.php'); //secure page
}else{
    header('location: login.php?errorCode=115');
}

?>