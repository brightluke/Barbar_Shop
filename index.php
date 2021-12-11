<?php
    session_start();
?>

<html>
<head>
     <title>Hair Studio</title>
      <link rel="stylesheet" href="sytle.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <section id="banner">
       <img src="images/logo.png" class="logo"><br/>
       
       <div class="banner-text">
           <h4>Welcome <?= $_SESSION['fName']." ".$_SESSION['lName']; ?></h4>
           <h1>Hair Studio</h1>
           <p>Style Your Hair Is Style Your Life</p>
           <div class="banner-btn">
            <a href="#"><span></span>Find Out</a>
            <a href="#"><span></span>Read More</a>
           </div>
       </div>
    </section>
    <div id="sideNav">
        <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">FEATURES</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">TESTIMONIALS</a></li>
            <li><a href="#">MEET US</a></li>
            <li><a href="prebook.php">PRE-BOOK</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu">
    </div>

    <!--Features-->

    <section id="feature">
    <div class="title-text">
    <p>FEATURES</p>
    <h1>Why Choose Us</h1>
    </div>
    <div class="feature-box">
      <div class="features">
         <h1>Experienced Staff</h1>
          <div class="features-desc">
              <div class="feature-icon">
                 <i class="fa fa-shield"></i>
              </div>
              <div class="feature-text">
                <p> we value our customers without you we are
                     nothing continue supporting us we will continue doing our very best to impress you </p>
            </div>
          </div>
          <h1>Pre Booking Online</h1>
          <div class="features-desc">
              <div class="feature-icon">
                 <i class="fa fa-check-square-o"></i>
                 
              </div>
              <div class="feature-text">
                <p> we value our customers without you we are
                     nothing continue supporting us we will continue doing our very best to impress you </p>
            </div>
          </div>
          <h1>Affordable Cost</h1>
          <div class="features-desc">
              <div class="feature-icon">
                 <i class="fa fa-inr"></i>
              </div>
              <div class="feature-text">
                <p> we value our customers without you we are
                     nothing continue supporting us we will continue doing our very best to impress you </p>
            </div>
          </div>
      </div>  
      <div class="features-img">
          <img src="images/barber-man.jpg">
    </div>  
    </div>
    </section>

<!--Service  -->

<section id="Service">
<div class="title-text">
<p>SERVICES</p>
<a href="prebook.php" id="myTing">
<h1>We Provide Better</h1>
</div> 
<div class="service-box">
    <div class="single-service">
        <img src="images/pic-1.jpg">
        <div class="overlay"></div>

            <div class="service-desc">
                <h3>Hair Styling</h3>
                <hr>
                <p>this is test under description of barber 
                foundation this is test under description of
                barber foundation.</p>
            </div>
        </a>
    </div>
    <div class="single-service">
        <img src="images/pic-2.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
            <h3>Beard Trim</h3>
            <hr>
            <p>this is test under description of barber 
            foundation this is test under description of
            barber foundation.</p>
        </div>
    </div>
    <div class="single-service">
        <img src="images/pic-3.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
            <h3>Hair Cut</h3>
            <hr>
            <p>this is test under description of barber 
            foundation this is test under description of
            barber foundation.</p>
        </div>
    </div>
    <div class="single-service">
        <img src="images/pic-4.jpg">
        <div class="overlay"></div>
        <div class="service-desc">
            <h3>Dry Shapoo</h3>
            <hr>
            <p>this is test under description of barber 
            foundation this is test under description of
            barber foundation.</p>
        </div>
    </div> 
</div> 
</section>

<!-- Testimonial  -->

<section id="testimonial">
    <div class="title-text">
        <p>TESTIMONIALS</p>
        <h1>What client says</h1>
        </div> 
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-4.jpg">
                    <div class="user-info">
                        <h4>MISHECK<i class="fa fa-twitter"></i> </h4>
                        <small>@misheck</small>
                    </div>
                </div>
                <p>this is the best online barber shop. the staffs are very welcoming </p> 
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-5.jpg">
                    <div class="user-info">
                        <h4>Eric<i class="fa fa-twitter"></i> </h4>
                        <small>@eric</small>
                    </div>
                </div>
                <p>i had my beard trimmed and am looking super clean</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="images/img-6.jpg">
                    <div class="user-info">
                        <h4>bright <i class="fa fa-twitter"></i> </h4>
                        <small>@bright</small>
                    </div>
                </div>
                <p>THE BEST IN THE BUSINESS</p>
            </div>
        </div>



</section>

<!--footer-->

<section id="footer">
    <img scr="images/footer-img.png" class="footer-img">
    <div class="title-text">
        <p>CONTACT</p> 
        <h1>Visit Shop Today</h1>
        </div> 
<div class="footer-row">
<div class="footer-left">
    <h1>Opening Hours</h1>
    <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 8pm</p>
    <p><i class="fa fa-clock-o"></i>Saturday to Sunday - 8am to 10pm</p>
</div>
<div class="footer-right">
    <h1>Get In Touch</h1>
    <p>#Plot No 634, Fringila Farm, Chisamba<i class="fa fa-map-marker"></i></p>
    <p>hairstudio@gmail.com<i class="fa fa-paper-plane"></i></p>
    <p>#+260966365248<i class="fa fa-phone"></i></p>
</div>
</div>

<div class="social-links">
<i class="fa fa-facebook"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-twitter"></i>
<p>Copyright Hair Studio</p>

</div>




</section>

     






<script>
var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.right = "-250px";

menuBtn.onclick = function(){
    if(sideNav.style.right == "-250px"){
       sideNav.style.right = "0";
       menu.src = "images/close.png ";
       
    }
    else{
        sideNav.style.right = "-250px";
        menu.src = "images/menu.png";
    }
}
</script>






</body>
</html>
    

