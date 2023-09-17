<?php
/**
This function will be used to connect to the database
 */
 function db_connect($host = "localhost", $user = "root", $pwd = "", $db = "classicmodels"){
    //connect to the database
    $link = mysqli_connect($host, $user, $pwd,$db ) or mysqli_error($link);
    if($link){
      return $link; //MySQLi Object
    }else{
      echo "The database could not be connected";
      return 0;
    }
 }
 ?>