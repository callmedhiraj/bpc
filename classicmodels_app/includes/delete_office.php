<?php
//load the pages
ob_start();
ob_end_flush();
require_once('functions/database.php');
require_once('functions/office_functions.php');
//get the data from the URL, query string
$id = isset($_GET['id']) ? $_GET['id']: '';
$status = delete_office($id);
if($status){
    redirect('index.php?page=office&action=view&success='.base64_encode('The office has been deleted'));
}else{
    redirect('index.php?page=office&action=view&error='.base64_encode('The office could not be deleted'));
}
?>