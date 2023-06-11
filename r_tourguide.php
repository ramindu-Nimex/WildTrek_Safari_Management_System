<?php
    include "connectionRamindu.php";
    session_start();
    $UserID = $_SESSION['uID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tour guide</title>
   <link rel="stylesheet" href="styles/r_tourguide.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
       <!-- header -->
       <header>
         <p>WildTrek - Best Under Sri Lankan Sky</p>
         <!-- navigation bar-->
         <nav>
             <div class="pic">
                 <img src="images/logo & footer image/download.png" alt="logo" width="32px" height="32px">
                 <h1 class="logo">WILDTREK</span></h1>
             </div>
 
             <input type="checkbox" name="" id="menu">
             <label for="menu"><i class="fas fa-bars"></i></label>
             <label for="menu"><i class="fas fa-times"></i></label>
 
             <ul class="menu">
                 <li><a href="./r_main.php" target="_blank">Home</a></li>
                 <li><a href="#">Safari Hotels</a></li>
                 <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                     <ul class="submenu">
                         <li><a href="./r_jeepreservation.php" target="_blank">Safari Jeep Reservation</a></li>
                         <li><a href="./r_campingreservation.php" target="_blank">Camping Reservation</a></li>
                     </ul>
                 </li>
                 <li><a href="#">Contact Us</a></li>
                 <li><a href="./r_tourguide.php" target="_blank">Meet our team</a></li>
                 <li><a href="#">About Us</a></li>
                 <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?> <i class="fa-solid fa-user"></i></a></li>
             </ul>
         </nav>
     </header>

   <!-- tour guide -->
   <div class="tourguide">
      <div class="tourguideintro">
         <h1>Tour Guides</h1>
         <p>Tourist guides provides the visitor with in depth knowledge in their mother tongue, 
            smoothing creases and wrinkles that is bound to occur while touring a foreign country for the first time. 
            It is best to choose a tourist guide who had been professionally trained and authorized by Sri Lanka tourism, 
            who are categorized as National Tourist Guides or Chauffeur Tourist Guides. The National 
            Tourist Guides caters to a large group of tourists traveling in luxury coaches driven by reserved drivers 
            while Chauffeur Tourist Guides would be guiding small groups conveyed in small vans and luxury cars.
         </p>
      </div>
      <div class="tourguide1">
         <div class="tourguidepic">
            <img src="images/tour guide/tourguide1.jpg" alt="tourguide1">
         </div>
         <div class="tourguidedetails">
            <h2>P. DUMINDA SAMARAKOON</h2>
               <ul>
                  <li><h4>Category : <span>National</span></h4></li>
                  <li><h4>Languages : <span class="a">English</span></h4></li>
                  <li><h4>Tel : <span class="b">0714483643</span></h4></li>
                  <li><h4>Address : <span class="c">No. 224, akarawita, gampaha</span></h4></li>
                  <li><h4>Registration No : <span class="d">N-1013</span></h4></li>
                  <li><h4>Email : <span class="e">dumindasamarakoon1@gmail.com</span></h4></li>
               </ul>
         </div>
      </div>

      <div class="tourguide1">
         <div class="tourguidepic">
            <img src="images/tour guide/tourguide2.jpg" alt="tourguide2">
         </div>
         <div class="tourguidedetails">
            <h2>K.P.R. KUMARA DHARMARATNE</h2>
               <ul>
                  <li><h4>Category : <span>National</span></h4></li>
                  <li><h4>Languages : <span class="a">German</span></h4></li>
                  <li><h4>Tel :  <span class="b">0777810317</span></h4></li>
                  <li><h4>Address : <span class="c">No 43/18 b, aluthgantota rd, kandy.</span></h4></li>
                  <li><h4>Registration No : <span class="d">N-0463</span></h4></li>
                  <li><h4>Email : <span class="e">get.taprobane@gmail</span></h4></li>
               </ul>
         </div>
      </div>

      <div class="tourguide1">
         <div class="tourguidepic">
            <img src="images/tour guide/tourguide3.jpg" alt="tourguide3">
         </div>
         <div class="tourguidedetails">
            <h2>Y. SUPUN THARAKA</h2>
               <ul>
                  <li><h4>Category : <span>National</span></h4></li>
                  <li><h4>Languages : <span class="a">Russian</span></h4></li>
                  <li><h4>Tel :  <span class="b">0776627255</span></h4></li>
                  <li><h4>Address : <span class="c">3rd lane, kindamullawatta, veyangoda</span></h4></li>
                  <li><h4>Registration No : <span class="d">N-0460</span></h4></li>
                  <li><h4>Email : <span class="e">tharaka@gmail.com</span></h4></li>
               </ul>
         </div>
      </div>

      <div class="tourguide1">
         <div class="tourguidepic">
            <img src="images/tour guide/tourguide4.jpg" alt="tourguide4">
         </div>
         <div class="tourguidedetails">
            <h2>DAYAN FERNANDO</h2>
               <ul>
                  <li><h4>Category : <span>National</span></h4></li>
                  <li><h4>Languages : <span class="a">Japanese</span></h4></li>
                  <li><h4>Tel :  <span class="b">0774370911</span></h4></li>
                  <li><h4>Address : <span class="c">No. 3/34,pathum uyana, hokandara</span></h4></li>
                  <li><h4>Registration No : <span class="d">N-0446</span></h4></li>
                  <li><h4>Email : <span class="e">fernando@gmail.com</h4></li>
               </ul>
         </div>
      </div>
   </div>

   <div class="tourguideimg">
      <img src="images/tour guide/tourguidefooter.jpg" alt="tourguide footer">
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
                      <img src="images/logo & footer image/5.avif" alt="" width="100px" height="80px">
                      <img src="images/logo & footer image/5.jpg" alt="" width="100px" height="80px">
                      <img src="images/logo & footer image/6.jpg" alt="" width="100px" height="80px">
                      <img src="images/logo & footer image/8.jpg" alt="" width="100px" height="80px">
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
                  <img src="images/logo & footer image/download.png" alt="logo" width="32px" height="32px">
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

  <script src="Js/r_main.js"></script>
</body>
</html>