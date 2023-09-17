<?php
//load the datbase
require('../functions/database.php');
require('../functions/office_functions.php');

//get the list of ofices
$offices = get_all_offices();

if(count($offices)>0){
    print_r($offices);
}else{
    //integer 0
    echo $offices;
}
?>