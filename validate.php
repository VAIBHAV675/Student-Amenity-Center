<?php
 
// include_once('connection1.php');
  
// function test_input($data) {
     
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
  
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
//     $username = test_input($_POST["username"]);
//     $password = test_input($_POST["password"]);
//     $stmt = $conn->prepare("SELECT * FROM admin");
//     $stmt->execute();
//     $users = $stmt->fetchAll();
     
//     foreach($users as $user) {
         
//         if(($user['username'] == $username) &&
//             ($user['password'] == $password)) {
//                 header("location: adminpg.php");
//         }
//         else {
//             echo "<script language='javascript'>";
//             echo "alert('WRONG INFORMATION')";
//             echo "</script>";
//             die();
//         }
//     }
// }

if(isset($_POST['submit'])){
    include_once('connection1.php');
    
    // header("location: adminpg.php");
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from admin where username='$username' AND password='$password'";
    // SELECT `name`, `id`, `mail`, `Mob`, `password`, `cpassword` FROM `registration` WHERE 1
    $result = mysqli_query($con, $sql);
    
    $num = mysqli_num_rows($result);
    
    if ($num == 1){
      header("location: adminpg.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
     

?>