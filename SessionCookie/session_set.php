<?php
session_start();
error_reporting(E_ALL);
//to create a session variable
$_SESSION['admin'] = "Raman Koirala";
$_SESSION['userid'] = 101;
$_SESSION['items'] = array(array(101, 7),
                            array(103, 12),
                            array(115, 21));

if(isset($_SESSION['admin'])){
    echo "Welcome, " . $_SESSION['admin'] .'User Id is '. $_SESSION['userid'];

        echo '<pre>';
        print_r($_SESSION['items']);
        echo '</pre>';

}else{
    echo "You do not have sufficient previlege to progress with the web";
}
?>

<a href="showSessionData.php">Show</a> || <a href="logout.php">LOGOUT</a>