<?php
require_once('../functions/database.php');
require_once('../functions/admin_functions.php');

//call the function to add a new admin
if(addAdmin('muskan', sha1('muskan!@'), 'muskan@gmail.com')){
    echo "Account created";
}else{
    echo 'Account could not be created';
}
?>