<?php
$username="root";
$password="";
$server="localhost";
$db="amenity";
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
        // alert("Connection Successful");
        </script><?php

}
else
echo "connection unsuccessful";
?>


