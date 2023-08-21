<?php
/**echo $_SERVER['SCRIPT_NAME'] .'?'. $_SERVER['QUERY_STRING'];
echo '<br />'.$_SERVER['REQUEST_URI'] ;
*/

$name = $_POST['txt_name']; // RAW - vulnerable
$txtPassword = sha1($_POST['txtPassword']);
//$_REQUEST /// not recommended at all

echo "Welcome Dear, " . $name;
echo "<br /> Your password is ".$txtPassword;  
?>