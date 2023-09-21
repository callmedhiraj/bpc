<?php
/**
 * This function will add a new office to the database
 * 
 */
function addOffice($officeCode, $city, $phone, $addressLine1, $addressLine2, $country, $state, $postalCode, $territory){
  //connect to the database  
  $link = db_connect();
  //prepare the sql query
  $sql = "INSERT INTO offices
            (officeCode, city, phone, addressLine1, addressLine2, state, country, postalCode, territory)
            VALUES
            ('$officeCode', '$city', '$phone', '$addressLine1', '$addressLine2', '$state', '$country', '$postalCode', '$territory')";
echo $sql;

    //execute the sql
    $resultSet = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
    //decisive parameter
     $affectedRows = mysqli_affected_rows($link); //integer
    if($affectedRows == 1){
        //SUCCESS
        header('location: ../index.php?page=office&action=view&success='.base64_encode('The office has been created successfylly.'));
    }else{
        header('location: ../index.php?page=office&action=view&error='.base64_encode('The office could not be created successfylly.'));
    }

    //close the connection
    db_close($link);

}

function editOffice($officeCode, $city, $phone, $addressLine1, $addressLine2, $country, $state, $postalCode, $territory){
    //connect to the database  
    $link = db_connect();
    //prepare the sql query
    $sql = "UPDATE offices
              SET 
                    city = '$city', 
                    phone = '$phone', 
                    addressLine1 = '$addressLine1', 
                    addressLine2 = '$addressLine2', 
                    state = '$state', 
                    country = '$country',
                     postalCode = '$postalCode', 
                     territory = '$territory'
                     WHERE officeCode = '$officeCode' "; 
              
 // echo $sql;
  
      //execute the sql
      $resultSet = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
      //decisive parameter
       $affectedRows = mysqli_affected_rows($link); //integer
      if($affectedRows == 1){
          //SUCCESS
          header('location: ../index.php?page=office&action=view&success='.base64_encode('The office has been modified successfylly.'));
      }else{
          header('location: ../index.php?page=office&action=view&error='.base64_encode('The office could not be modified successfylly.'));
      }
  
      //close the connection
      db_close($link);
  
  }
/**
 * THis function will fetch all the details of all the offices
 */
function get_all_offices(){
    //connect to the database
    $link = db_connect();
    //prepare the sql
    $sql = "SELECT * 
                FROM offices";
    
    //prepare the balnk array
    $data = array();
    //execute the query
    $resultSet  = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
    //decisive parameter
    $numRows = mysqli_num_rows($resultSet);
    if($numRows > 0){
        //there are few records
        //loop thorugh it and fetch the records to $data
        while($row = mysqli_fetch_assoc($resultSet)){
            //place the $row into $data
            array_push($data, $row);
        }
        db_close($link);
        return $data;
    }else{
        db_close($link);
        return 0; //there are no records
    }

    

}
function get_single_office($officeCode){
    //connect to the database
    $link = db_connect();
    //prepare the sql
    $sql = "SELECT * 
                FROM offices
                WHERE officeCode = '$officeCode' ";
    
    //prepare the balnk array
    $data = array();
    //execute the query
    $resultSet  = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
    //decisive parameter
    $numRows = mysqli_num_rows($resultSet);
    if($numRows > 0){
        //there are few records
        //loop thorugh it and fetch the records to $data
        while($row = mysqli_fetch_assoc($resultSet)){
            //place the $row into $data
            array_push($data, $row);
        }
        db_close($link);
        return $data;
    }else{
        db_close($link);
        return 0; //there are no records
    }

    

}
/**
 * This function will delete an office provided that
 * an officeCode is passed to it
 */

 function delete_office($officeCode){
    //connect ot the database
    $link = db_connect();
    //prepare the SQL
    $sql = "DELETE 
                FROM offices 
                WHERE officeCode = '$officeCode' ";
    //execute the sql query
    $resultSet = mysqli_query($link, $sql) or trigger_error(mysqli_error($link));
    //decisive parameter
    $affectedRows = mysqli_affected_rows($link); //integer
    if($affectedRows> 0){
        //success
        db_close($link);
    return true;
    }else{
        db_close($link);
        return false;
    }
    //close the database
    
 }