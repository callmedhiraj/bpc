<?php
session_start();
session_destroy(); //all the information has ben removed

///so redirect to the login page
header('location: login.php');
?>