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

 /**
  * This function will be used to close the datbase connection

  */
  function db_close($link){
    if(mysqli_close($link)){
    //echo "Database Closed";
    }else{
      //echo "Database could not be closed";
    }
  }
  function redirect($url){
    echo '<script>
    window.location("'.$url.'")</script>';
  }
 ?>