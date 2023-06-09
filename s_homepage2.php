<?php

include "connectionRamindu.php";;
session_start();
$UserID = $_SESSION['uID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Slider</title>
   <link rel="stylesheet" href="s_css/main.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href = "s_css/s_homepage2.css">
</head>
<body>
    <!-- header -->
    <header>
      <p>WildTrek - Best Under Sri Lankan Sky</p>
      <!-- navigation bar-->
      <nav>
          <div class="pic">
              <img src="s_images/download.png" alt="logo" width="32px" height="32px">
              <h1 class="logo">WILD<span>TREK</span></h1>
          </div>

          <input type="checkbox" name="" id="menu">
          <label for="menu"><i class="fas fa-bars"></i></label>
          <label for="menu"><i class="fas fa-times"></i></label>

          <ul class="menu">
              <li><a href="./r_main.html">Home</a></li>
              <li><a href="#">Safari Hotels</a></li>
              <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                  <ul class="submenu">
                      <li><a href="./jeepreservation.html" target="_blank">Safari Jeep Reservation</a></li>
                      <li><a href="./campingreservation.html" target="_blank">Camping Reservation</a></li>
                  </ul>
              </li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="./ourteam.html" target="_blank">Meet our team</a></li>
              <li><a href="#">About Us</a></li>
              <li class="sign"><a href="./s_viewprofile.php">Hi, <?php echo $_SESSION['userName']; ?></a></li>
              <li class="sign"><a href="./s_RegisterForm.html"><i class="fa-solid fa-user-plus"></i> Logout</a></li>
          </ul>
      </nav>
  </header>

  <!-- button -->
  <div class="button">
      <h1>Seek your amazing journey!!</h1>
      <div class="button1">
         <a href="./s_viewprofile.php">User Profile</a>
         <a href="./s_viewprofile.php">Visit FAQ</a>
      </div>
   </div>

  <!-- Slider -->
  <div class="slider">
   <figure>
       <!--One Side-->
       <div class="slide">
           <p>Enjoy your holiday with amazing promos!!.</p>
           <img src="s_images/image22.jpg" alt="slide1" width="725px" height="482px">
       </div>
       <div class="slide">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
           <img src="s_images/image2.jpg" alt="slide2" width="725px" height="482px">
       </div>
       <div class="slide">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
           <img src="s_images/image3.jpg" alt="slide3" width="725px" height="482px">
       </div>
       <div class="slide">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
           <img src="s_images/image4.jpg" alt="slide4">
       </div>
       <div class="slide">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
           <img src="s_images/image5.jpg" alt="slide5" width="725px" height="482px">
       </div>
       <div class="slide">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
         <img src="s_images/image6.jpg" alt="slide6" width="725px" height="482px">
     </div>
     <div class="slide">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, eaque.</p>
         <img src="s_images/image7.jpg" alt="slide7" width="725px" height="482px">
     </div>
     <div class="slide">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores laborum dolorum nemo.</p>
         <img src="s_images/image8.jpg" alt="slide8" width="725px" height="482px">
     </div>
     <div class="slide">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente accusantium.</p>
         <img src="s_images/image9.jpg" alt="slide9" width="725px" height="482px">
     </div>
     <div class="slide">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         <img src="s_images/image23.webp" alt="slide10" width="725px" height="482px">
     </div>
   </figure>
   </div>

   <!--Footer-->
   <footer>
      <div class="Mcontent">
          <div class="left box">
              <h2>Abou Us</h2>
              <div class="content">
                  <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Delectus voluptates sapiente, consectetur id quos reiciendis
                  omnis, ab, ex unde sequi earum dignissimos. Sit architecto 
                  blanditiis impedit dolores harum quam. Inventore sed eaque 
                  libero et, similique repellendus exercitationem quos nihil 
                  totam dolore, laudantium facilis nostrum modi assumenda hic 
                  dolores, rerum nulla!</P>

                  <div class="social">
                      <a href="#"><i class="fa-brands fa-facebook"></i></span></a>
                      <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                      <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
  
                  <div class="tearms">
                      <a href="#">Tearms of condition | </a>
                      <a href="#">Privacy policy | </a>
                      <a href="#">Faq</a>
                  </div>
              </div>

          </div>

          <div class="center box">
              <h2>Contact Us</h2>
              <div class="content">
                  <div class="place">
                      <span class="fas fa-map-marker-alt"></span>
                      <span class="text">
                          No.122/A Malabe, Colombo
                      </span>
                  </div>
                  <div class="phone">
                      <span class="fas fa-phone-alt"></span>
                      <span class="text">
                          +94773322443
                      </span>
                  </div>
                  <div class="email">
                      <span class="fas fa-envelope"></span>
                      <span class="text">
                          info@wildtrek.com
                      </span>
                  </div>
                  <div class="latest">
                      <img src="s_images/5.avif" alt="" width="100px" height="80px">
                      <img src="s_images/5.jpg" alt="" width="100px" height="80px">
                      <img src="s_images/6.jpg" alt="" width="100px" height="80px">
                      <img src="s_images/8.jpg" alt="" width="100px" height="80px">
                  </div>
              </div>
          </div>

          <div class="right box">
              <h2>News Letter</h2>
              <div class="content">
                  <form action="">
                      <div class="email">
                          <input type="email" placeholder="Your Email" required>
                      </div>
                      <div class="btn">
                          <button type="submit">Send</button>
                      </div>
                  </form>
                  <div class="logo2">
                  <img src="s_images/download.png" alt="logo" width="32px" height="32px">
                  <h1>WILD<span>TREK</span></h1>
                  </div>

                  <div class="top"> 
                      <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="bottom">
          <div>
              <span class="credit">
                  Designed & Developed By
                  <a href="">Team Wild-Trek</a>
                  |
              </span>
              <span>
                  &copy;
              </span>
              <span>
                  2023 All Right Reserved
              </span>
          </div>
      </div>

  </footer>

  <script src="js/r_main.js"></script>
</body>
</html>