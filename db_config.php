<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "global_cafe_system";  
  
// Create database connection  
  $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
// Check connection  
if (!$conn) {
   // echo 'connecting to the database not successful<br>';
}
else {
    //echo 'database connection successful <br>';
}

?>