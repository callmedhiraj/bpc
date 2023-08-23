<?php
/**echo $_SERVER['SCRIPT_NAME'] .'?'. $_SERVER['QUERY_STRING'];
echo '<br />'.$_SERVER['REQUEST_URI'] ;
*/

$name = $_POST['txt_name']; // RAW - vulnerable
$txtPassword = sha1($_POST['txtPassword']);
//$_REQUEST /// not recommended at all
//to recieve the hidden value
$hidden = $_POST['hidden'];
//group of check box
$courses = $_POST['courses'];

echo '<pre>';
print_r($courses);
echo '</pre>';
//convert array to string
$str = implode(',',$courses);

echo "Welcome Dear, " . $name;
echo "<br /> Hidden value is ". $hidden;  
echo "<br /> The courses chosen are ". $str;  

$sql = "INSERT INTO tbl_enqiries VALUES () ";

///dealing with files : 2D Arrays
echo '<pre>';
print_r($_FILES);
echo '</pre>';



$destination='../uploads/'.date('yyyy_mm_dd_hh_ii_ss_').$_FILES['profile_pic']['name'];
if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $destination)){
    echo "The file has been uploaded ";
}else{
    echo "The file could not be uploaded";
}

///
$sql  = 'INSERT INTO tbl_name VALUES ('.$destination.')';
?>