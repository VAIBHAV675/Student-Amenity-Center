<?php
include("connection.php");

$db= $con;
$tableName="products";
$columns= ['product_id', 'product_cat','product_brand','product_title','product_price', 'product_desc','product_keywords'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY product_id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Amenity Center</title>
</head>
<style>
    .in {
        width:100%;
        position:fixed;
        display:flex;
        justify-content:center;
        margin-top:250px;
        align-items:center;
    }
    form {
        position:fixed;
        width:30%;
        height:480px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        background: #AC7088;
    }

    form input,.confirm{
        height:40px;
        width:200px;
        margin:10px;
        border-radius:5px
    }

    #buymodal{
        display:none;
    }

  
</style>
<body>



    <body>
    <div class="container">
            <div class="container" id="one">
                <div id="logo1"><a href="index.php"><img src="imgss/newlogo.svg" alt=""></a></div>
            </div>
            <div class="container" id="two">
                <div class="item" id="item-1"><a class="item" style="" href="welcome.php">HOME</div>
                <div class="item" id="item-2"><a class="item" style="" href="about.php">ABOUT US</div>
                <div class="item" id="item-3"><a class="item" style="" href="contact.php">CONTACT US</a></div>
                <div class="item" id="item-4"><a class="item" style="text-decoration: none" href="Signup.php">LOGIN/SIGNUP</a></div>
            </div>
        </div>


        <div id="buymodal">
            <!-- <button style="font-size:100px;"  onclick="close()" >asdadadX</button> -->
            <div class="in">
            <form action="amenities.php"  method="post">
            <input type="text" required name="name" placeholder="Name.." >
            <input type="text" required style="display:none" id="proid" name="proid" placeholder="Name.." >
            <input type="tel" name="mobile"  placeholder="Mobile.." >
            <input type="textarea" name = "address" placeholder="Address.." >
            <input type="text" name = "pincode" placeholder="Pincode.." >
            <button  type="submit" onclick="confirm()" name="submit" class="confirm" >confirm</button>
            </form>
            
            </div>
            
            
        </div>


        <?php
// session_start();
// include("admin/css.php");
include_once('connection.php');

if(isset($_POST['submit']))
{
$proid=$_POST['proid'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];

mysqli_query($con,"INSERT INTO `orders_amenities`(`name`, `mobile`, `address`, `pincode`,`product_id`) VALUES('$name','$mobile','$address','$pincode','$proid')") or die ("query incorrect");


mysqli_close($con);
}

?>


        <script >
            function buy(x) {
                document.getElementById("buymodal").style.display = "block";
                document.getElementById("proid").value  = x;
                // console.log(x);
            }
            function close() {
                document.getElementById("buymodal").style.display = "none";
            }

        </script>




        <div class="content" style="width :100%;height: 600px;padding-top:100px;">
        


<!-- 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> -->
<div class="contaainer">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
        <tr><th>id</th>
         <th>category</th>
         <th>brand</th>
         <th>title</th>
         <th>price</th>
         <th>description</th>
         <th></th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <td><?php echo $data['product_id']??''; ?></td>
      <td><?php echo $data['product_cat']??''; ?></td>
      <td><?php echo $data['product_brand']??''; ?></td>
      <td><?php echo $data['product_title']??''; ?></td>
      <td><?php echo $data['product_price']??''; ?></td>
      <td><?php echo $data['product_desc']??''; ?></td>
      <td><button class="buy_btn" onclick="buy(<?php echo $data['product_id'] ?>)" > BUY </button></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>

</div>
</div>


        
</div>





        <footer>
            <div class="content">
                <div class="top">
                    <div class="logo-details">
                        <!-- <span class="logo_name">For the student,By the Student </span> -->
                    </div>
                    <div class="media-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="link-boxes">
                    <ul class="box">
                        <li class="link_name">Links</li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="admin/admin.php">Admin Login</a></li>

                    </ul>
                    <ul class="box">
                        <li ><a href="login.php">Sell Items</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Study Table</a></li>
                        <li><a href="#">Chair</a></li>
                        <li><a href="#">Bed</a></li>
                        <li><a href="#">Table lamp</a></li>

                    </ul>
                    <ul class="box">
                        <li class="link_name">Other services</li>
                        <li><a href="#">Online Stationery</a></li>
                        <li><a href="#">College Uniforms</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Previous Notes</a></li>

                    </ul>
                    <ul class="box">
                        <li class="link_name">Contact</li>
                        <li><a href="#">+91 6207753203:Aniket</a></li>
                        <li><a href="#">+91 7907988147:Soorya</a></li>
                        <li><a href="#">+91 9354320840:Vaibhav</a></li>
                        <p><a href="mailto:someone@example.com">studentamenity@gmail.com</a></p>


                    </ul>




                </div>
            </div>
            <div class="bottom-details">
                <div class="bottom_text">
                    <span class="copyright_text"> <a href="#"></a></span>
                    <span class="policy_terms">
                        <a href="#"></a>

                    </span>
                </div>
            </div>
        </footer>


    </body>

</html>
        
