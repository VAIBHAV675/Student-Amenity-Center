<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Login page</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include 'links.php'?>
</head>
<body>
<form action="index1.php" method="post">
  <div class="imgcontainer">
    <img src="male-g4656b92d7_640.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Unique Id</b></label>
    <input type="name" placeholder="Enter UserId" name="uid" required><br>
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email-id" required><br>
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="uname" required><br>
    <label for="uname"><b>Mobile</b></label>
    <input type="text" placeholder="Enter your Mobile no." name="mobno." required><br>

    <button name="submit" type="submit">Register</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><b>Already Registered:</b><a href="#"><b><u>Login</b></u></a></span>
  </div>
</form>

</body>
</html>
<?php
// echo "asd";
// include 'connection.php';
if(isset($_POST['submit'])){
    include 'connection.php';
    $id=$_POST['uid'];
    $mail=$_POST['email-id'];
    $mob=$_POST['mobno.'];
    $name=$_POST['uname'];
    // $insertquerry="insert into user login details(id,email-id,mobno.,name) values('$id','$mail','$mob','$name')";
    $insertquerry= "INSERT INTO `` (`id`, `email-id`, `mob no.`, `name`) VALUES ('$id','$mail','$mob','$name')";
    $r = mysqli_query($con,$insertquerry);

    if($r){
      ?>
      <script> alert("data inserted") </script>
      <?php
    }
    else{
      ?>
      <script> alert("data not inserted") </script>
      <?php
    }
    

}
?> -->
