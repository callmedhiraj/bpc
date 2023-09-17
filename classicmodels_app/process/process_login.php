<?php
//load the file
require_once('../functions/database.php');
require_once('../functions/admin_functions.php');
//connect to the database
$link = db_connect();
//collect the data using 
//SANITIZE
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = sha1(mysqli_real_escape_string($link, $_POST['password']));
//call the function to validate
if(validate($username, $password)){
    header('location: ../index.php'); //dashboard
}else{
    header('location: ../login.php');
}

//execute the query


//if the data is found, store it as a session variable


//redirect to the dashboard->Secured Area


//if the data is not found, redirect to the login page with 
//appropriate message... QUERY STRING

?>