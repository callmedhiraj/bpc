<?php
session_start();
//to remove all session values at the same time
//session_destroy();
unset($_SESSION['admin']);
header('location: showSessionData.php');
?>