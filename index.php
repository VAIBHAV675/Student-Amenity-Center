<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Amenity Center</title>
</head>
<body>

    </head>



    <body>
        <div class="container">
            <div class="container" id="one">
                <div id="logo1"><img src="imgss/newlogo.svg" alt=""></div>
            </div>
            <div class="container" id="two">
                <div class="item" id="item-1">HOME</div>
                <div class="item" id="item-2"><a class="item" style="" href="about.php">ABOUT US</div>
                <div class="item" id="item-3"><a class="item" style="" href="contact.php">CONTACT US</a></div>
                <div class="item" id="item-4"><a class="item" style="text-decoration: none" href="Signup.php">LOGIN/SIGNUP</a></div>
            </div>
        </div>


        <div class="content" style="width :100%;height: 530px;">

            <div class="slideshow-container" >

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="imgss/cover.png" style="width:95%">
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="imgss/img2.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="imgss/img3.webp" style="width:100%">
                </div>
                
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
                <br>
                
                <!-- <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div> -->
                
                <script>
                let slideIndex = 1;
                showSlides(slideIndex);
                
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                }
                </script>

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
                        <li><a href="about.php">About Us</a></li>
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