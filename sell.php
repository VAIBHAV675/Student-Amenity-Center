<?php
session_start();


if(!isset($_SESSION["user_id"])){
//   echo "You are Logged in!!";
//   header('location:login.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/welcome.css"> -->
    <link rel="stylesheet" href="css/sell.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/slider.css">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Amenity Center</title>
</head>
<body>

    </head>

<!--Start of Tawk.to Script-->
 <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62e00b7b54f06e12d88b738a/1g8tipn2u';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> 
<!--End of Tawk.to Script-->

    <body>
    <div class="container">
            <div class="container" id="one">
                <div id="logo1"><a href="index.php"><img src="imgss/newlogo.svg" alt=""></a></div>
            </div>
            <div class="container" id="two">
                <div class="item" id="item-1"><a class="item" style="text-decoration: none" href="welcome.php">HOME</a></div>
                <div class="item" id="item-2"><a class="item" style="text-decoration: none" href="about.php">ABOUT US</div>
                <div class="item" id="item-3"><a class="item" style="text-decoration: none" href="contact.php">CONTACT US</a></div>
                <div class="item" id="item-4"><a class="item" style="text-decoration: none" href="Signup.php">LOGOUT</a></div>
            </div>
        </div>


        <div class="contentt" style="width :100%;height: 600px;">

        <div class="inside">
            
            <form class="inside" action="sell.php" method="post" type="form" name="form" enctype="multipart/form-data">

                <div class="in">
                <label>Product Title:</label>
                                            <input type="text" id="product_name" required name="product_name"
                                                class="form-control"><br><br>
                                    
                        
                                            <!-- <label for="">Add Image:</label>
                                            <input type="file" name="picture" required class="btn btn-fill btn-success"
                                                id="picture"><br><br><br> -->
                    
                        
                                            <label>Description:</label>
                                            <textarea rows="3" cols="80" id="details" required name="details"
                                                class="details"></textarea><br><br><br>
                        
                        
                                            <label>Pricing:</label>
                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                            <input type="text" id="price" name="price" required class="form-control"><br><br>
                </div>

                <div class="in">
                    
                <label>Product Category</label>
                                            <input type="number" id="product_type" name="product_type" required="[1-6]"
                                                class="form-control"><br><br>
                                            <label for="">Product Brand:</label>
                                            <input type="number" id="brand" name="brand" required class="form-control"><br><br>


                                            <label>Product Keywords</label>
                                            <input type="text" id="tags" name="tags" required class="form-control"><br><br>

                                <button onclick="al()" type="submit" id="btn_" name="btn" required
                                    class="btn btn-fill btn-primary">Update Product</button>
                </div>


            </form>

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
                        <li><a href="#">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Get Started</a></li>

                    </ul>
                    <ul class="box">
                        <li class="link_name">Sell Items</li>
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

    
<?php
// session_start();
include("admin/css.php");
include_once('connection.php');

if(isset($_POST['btn']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
// $c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
// $picture_name=$_FILES['picture']['name'];
// $picture_type=$_FILES['picture']['type'];
// $picture_tmp_name=$_FILES['picture']['tmp_name'];
// $picture_size=$_FILES['picture']['size'];

// $pic_name=time()."_".$picture_name;
mysqli_query($con,"INSERT INTO `sell_items`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_keywords`) VALUES ('$product_type','$brand','$product_name','$price','$details','$tags')") or die ("query incorrect");


mysqli_close($con);
}

?>


<script>

modal=document.getElementById('modal-content')

function al(){
    alert("product added");
}

</script>
</html>