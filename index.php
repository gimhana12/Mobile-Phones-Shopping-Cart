<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Mobile
    </title>
    <!--link to css-->
    <link rel="stylesheet" href="css/style.css">
    <!--box icons-->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>
    <!--navbar-->
    <header>
        <a href="#" class="logo"><i class='bx bxs-basket'></i>EcoMobile</a> 
        <!--Menu Icon-->

        <div class="bx bx-menu" id="menu-icon"></div>
        <!--Nav List-->
        <ul class="navbar">
        <li type="none"><a href="index.php"class="index-active">Home</a></li>
        <li type="none"><a href="about.php">About Us</a></li>
        <li type="none"><a href="categories.php">Categories</a></li>
        <li type="none"><a href="product.php">Products</a></li>
        <li type="none"><a href="Contact Us.php">Contact Us</a></li>
        </ul>
   
    <!--Profile-->
    <div class="profile">
        <img src="images/profile.jpg" alt="">
        <a href="login.php"> <span>Login</span></a>
        <i class='bx bx-caret-down'></i>
    </div>
    </header>
    <!--Home-->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!--Slide 1-->
            <div class="swiper-slide container">
                <div class="home-text">`
                    <h2><br><br> THE BEST MOBILE PHONES</h2>
                    <a href="product.php" class="btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
              <!--Not Center Image
                <img src="home1.jpg" alt="">-->

            </div>
        </div>

        <!--<div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>-->
    </section>

    <div class="gallery">
  <a target="_blank" href="images/1.jpg">
    <img src="images/1.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Apple iphone 13</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/2.jpg">
    <img src="images/2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Apple iphone 7+</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/3.jpg">
    <img src="images/3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Oppo F9 2023</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/4.jpg">
    <img src="images/4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Samsung Galaxy M23</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/5.jpg">
    <img src="images/5.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Redmi Note 11 - 2023</div>
</div>


<img src="images/2.jpg" alt="" width="400" height="3">
 <!--about-->
 <section class="about" id="about">
    <img src="images/about.jpg" alt="">
    <div class="about-text">
        <span>About Us</span>
        <p>Eco Mobile is a Professional Online Shopping Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of Smart phones, with a focus on dependability and Online Mobile Phone shopping Web site. We're working to turn our passion for eCommerce into a booming online website. We hope you enjoy our Online Store as much as we enjoy offering them to you.<br><br>I will keep posting more important posts on my Website for all of you. Please give your support and love.<br><br>Thanks For Visiting Our Site<br>Have a nice day..!</p>
        <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt'></i></a>
    </div>
</section>


<section class="customers" id="customers">
    <h2>Get In Touch - You can buy Smart Phones</h2>
    <!--Customer Content-->
            <p><b><center>You can buy your favourite Mobile Phone in Our WebSite.</center></b></p>
    </div>
</section>

<!--customer contect-->
<section class="contact">

      <form action="" method="post">

      <div class="flex">


      <div class="one">
         <div class="inputBox">
            <span><center><b>Name</b></center></span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>

         <div class="inputBox">
            <span><center><b>email</b></center></span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         </div>

         <div class="two">
         <div class="inputBox">
            <span><center><b>Number</b></center></span>
            <input type="tel" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span><center><b>NIC</b></center></span>
            <input type="number" placeholder="enter your NIC number" name="nic" required>
         </div>
         </div>
         
         <div class="three">
         <div class="inputBox inputBox__full">
            <span><center><b>Address</b></center></span>            
            <textarea name="address" placeholder="enter your address" required cols="23" rows="2"></textarea>
         </div>

         <div class="inputBox">
            <span><center><b>Feedback</b></center></span>            
            <textarea name="message" placeholder="enter your message"required cols="23" rows="2" ></textarea>
            
         </div>
         </div>

      </div>

      <input type="submit" value="send message"="send" class="btn">
     
      

   </form>

</section>


<!--Footer-->
<section class="footer" id="footer">
    <div class="footer-box">
    <a href="#" class="logo"><i class='bx bxs-basket'></i>EcoMobile</a>
    <p>Dodamgaslanda,50th Streat,4th<br></p> 
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-twiter'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
    </div> 
    </div>
    <div class="footer-box">
        <h2>categories</h2>
        <a href="samsung category.php">Samsung</a><br>
        <a href="oppo category.php">OPPO</a><br>
        <a href="apple Category.php">Apple</a><br>
        <a href="redmi category.php">Redmi</a><br>
        <a href="huawei.php">Huawei</a>
    </div>
    <div class="footer-box">
        <h2>Usful Links</h2>
        <a href="terms & conditions.php">Terms & Conditions</a><br>
        <a href="privacy policy.php">privacy policies</a><br>
        <a href="FAQ.php">FAQ</a><br>
        <a href="#">Return Policy</a>
    </div>
    <div class="footer-box">
        <h2>Newsletter</h2>
        <p>Gat 10% discount with <br>Email Newsletter</p>
        <form action="">
            <i class='bx bxs-envelope'></i>
            <input type="email" name="" id="" placeholder="Enter Your email">
            <i class='bx bx-arrow-back bx-rotate-180' ></i>
        </form>
    </div>
</section>
<!--Copyright-->
<div class="copyright">
    <p>&#169;EcoMobile All Right Reserved.</p>
</div>
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--Link To JS-->
    <script src="main.js"></script>
    
</body>
</html>