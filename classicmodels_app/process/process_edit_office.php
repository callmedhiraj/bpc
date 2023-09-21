<?php
//load the functions
require_once('../functions/database.php');
require_once('../functions/office_functions.php');
$link = db_connect();
//load the form values: SANITIZE
$officeCode = mysqli_real_escape_string($link, $_POST['officeCode']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$addressline1 = mysqli_real_escape_string($link, $_POST['addressline1']);
$addressline2 = mysqli_real_escape_string($link, $_POST['addressline2']);
$State = mysqli_real_escape_string($link, $_POST['State']);
$Country = mysqli_real_escape_string($link, $_POST['Country']);
$PostalCode = mysqli_real_escape_string($link, $_POST['PostalCode']);
$Territory = mysqli_real_escape_string($link, $_POST['Territory']);

//call the function to add a new office
if(editOffice($officeCode, $city, $phone, $addressline1, $addressline2, $Country, $State, $PostalCode, $Territory)){
    //redirect to the success page
    return true;
}else{
    return false;
}
db_close($link);
?>