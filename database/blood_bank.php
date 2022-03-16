<?php 
  
    
    //database connection
    $con = mysqli_connect('localhost', 'root', "") or die(mysqli_error()); 
    //selecting database
    $db_select = mysqli_select_db($con, 'blood-bank-system') or die(mysqli_error());

?>