<?php
require_once('../library/database.php');

//call the function
$conxn = db_connect();

echo '<pre>';
print_r($conxn);
echo '</pre>';

?>