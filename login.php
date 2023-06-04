<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
  <!-- <form method="post" action="login.php" name="login-form">
    <link rel="stylesheet" href="css/login.css">
   
<div class="form-element">
  <label>Unique-id</label>
  <input type="text" name="id" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
  <label>Password</label>
  <input type="password" name="password" required />
</div>
<button type="submit" name="submit" value="login">Log In</button>
</form> -->



<div class="main-w3layouts wrapper">
		<h1 style="font-weight:bold;" >LOGIN </h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" action="login.php" name="login-form">
					<input class="text" type="text" name="id" pattern="[a-zA-Z0-9]+" placeholder="unique-id" required="">
          <br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input name="submit" type="submit" value="login">
				</form>
				<p>Don't Have an Account? <a href="signup.php"> SignUp Now!</a></p>
			</div>
		</div>

</head>
<body>
    
</body>
</html><?php 
$login = false;
$showError = false;
// if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['submit'])){
    include 'connection.php';
    session_start();
    $id = $_POST["id"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from registration where id='$id' AND password='$password'";
    // SELECT `name`, `id`, `mail`, `Mob`, `password`, `cpassword` FROM `registration` WHERE 1
    $result = mysqli_query($con, $sql);
    
    $num = mysqli_num_rows($result);
    
    if ($num == 1){
      $_SESSION["user_id"] =  $id;
      header("location: welcome.php");
     
        // while($row=mysqli_fetch_assoc($result)){
          
        //     if (password_verify($password, $row['password'])){ 
        //         $login = true;
        //         session_start();
        //         $_SESSION['loggedin'] = true;
        //         $_SESSION['id'] = $id;
        //         

        //         header("location: welcome.php");
        //     } 
        //     else{
        //         $showError = "Invalid Credentials";
        //     }
        // }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

        
       