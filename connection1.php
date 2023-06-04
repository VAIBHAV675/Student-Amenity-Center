<?php
 
// $conn = "";
  
// try {
//     $servername = "localhost:3306";
//     $dbname = "amenity";
//     $username = "root";
//     $password = "";
  
//     $conn = new PDO(
//         "mysql:host=$servername; dbname=amenity",
//         $username, $password
//     );
     
//    $conn->setAttribute(PDO::ATTR_ERRMODE,
//                     PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
 
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "amenity";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    // echo "connection asd";
}


?>