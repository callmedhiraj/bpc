<?php
session_start();
function validate($username, $password){
    //connect to the database
    $link = db_connect();
    //prepare the sql query
    $sql = "SELECT admin_id as uid, username FROM tbl_admin 
                WHERE username = '$username'
                AND password = '$password' 
                AND admin_status = 1 ";
    //to execute the sql query
    $resultSet = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
    //decisive paraameter
    $numRows = mysqli_num_rows($resultSet); //how many records are fetched
    
    if($numRows == 1){
        //set the data in the session
        $row = mysqli_fetch_assoc($resultSet);
       /*echo '<pre>';
        print_r($row);
       echo '</pre>';
       */
      $_SESSION['userid'] = $row['uid'];
      $_SESSION['username'] = $row['username'];
      db_close($link);
      return true;
    }else{
        db_close($link);
        return false;
    }

    //close the database
    

}
/**
 * To create a new admin
 * 
 */
function addAdmin($username, $password, $email){
$link = db_connect();
$sql = "INSERT INTO tbl_admin (username, password, email) VALUES ('$username', '$password', '$email')";
//execue the sql
$resultSet = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
//decisive parameter
$affectedRows = mysqli_affected_rows($link);
if($affectedRows == 1){
    //success
    db_close($link);
    return true;
}else{
    db_close($link);
    return false;
}
}