<?php
//load the datbase
require('../functions/database.php');
require('../functions/office_functions.php');
//call the function
$status = delete_office('ASDF007');
if($status){
    header('location: ../index.php?page=office&action=view&success='.base64_encode('The office has been deleted'));
}else{
    header('location: ../index.php?page=office&action=view&error='.base64_encode('The office could not be deleted'));
}