<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="css/signup.css">
<!-- //web font -->
</head>
<body> 
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1 style="font-weight:bold;" >SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="name" placeholder="Username" required=""> <br>
					<input class="text" type="text" name="unique-id" placeholder="unique-id" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text email" type="text" name="mobile" placeholder="mobile" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input name="submit" type="submit" value="SIGNUP">
				</form>
				<p>Have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<!-- <div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> -->
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

    
<?php
    // include 'connection.php';
    if(isset($_POST['submit'])){
    include 'connection.php';
    $name=$_POST['name'];
    $id=$_POST['unique-id'];
    $mail=$_POST['email'];
    $mob=$_POST['mobile'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    // $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    $emailquery="select * from registration where email='$mail'";
    $query= mysqli_query($con,$emailquery);
    

    if($password===$cpassword){
      
      $insertquerry= "insert into registration (name,id,mail,mob,password,cpassword) values('$name','$id','$mail','$mob','$password','$cpassword')";
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
    // if($emailcount>0){
    //     echo "this email already exixts";
    // }
    // else{
        
    //       }

    //     else
    //     echo "Wrong password";}
    
    // $insertquerry="insert into user login details(id,email-id,mobno.,name) values('$id','$mail','$mob','$name')";
    }
        }
   
    ?>

	<!-- //main -->
</body>
</html>