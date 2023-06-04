<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
    <?php include 'links.php'?>
</head>
<body>
    
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
    include 'connection.php';
    $name=my_sqli_real_escape_string($con,$_POST['name']);
    $id=my_sqli_real_escape_string($con,$_POST['unique-id']);
    $mail=my_sqli_real_escape_string($con,$_POST['email']);
    $mob=my_sqli_real_escape_string($con,$_POST['mobile']);
    $password=my_sqli_real_escape_string($con,$_POST['password']);
    $cpassword=my_sqli_real_escape_string($con,$_POST['cpassword']);
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    $emailquery="select * from registration where email='$mail'";
    $query= mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
    if($emailcount>0){
        echo "this email already exixts";
    }
    else{
        if($pass===$cpassword){
            $insertquerry= "insert into registration (name,id,mail,mob,password,cpassword)values('$name','$id','$mail','$mob','$pass','$cpass')";
            $iquery = mysqli_query($con,$insertquerry);
            if($iquery){
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

        else
        echo "Wrong password";}
    
    // $insertquerry="insert into user login details(id,email-id,mobno.,name) values('$id','$mail','$mob','$name')";
   
        }
    ?>
</body>