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
    <title>Safari Jeep Reservation</title>
    <link rel="stylesheet" href="styles/r_jeepreservation.css">
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
                <h1 class="logo">WILD<span>TREK</span></h1>
            </div>

            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class="fas fa-bars"></i></label>
            <label for="menu"><i class="fas fa-times"></i></label>

            <ul class="menu">
                <li><a href="./r_main.html" target="_blank">Home</a></li>
                <li><a href="#">Safari Hotels</a></li>
                <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="./r_jeepreservation.html" target="_blank">Safari Jeep Reservation</a></li>
                        <li><a href="./r_campingreservation.html" target="_blank">Camping Reservation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./r_ourteam.html" target="_blank">Meet our team</a></li>
                <li><a href="#">About Us</a></li>
                <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?> <i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- slider -->
    <div class="jeeplider">
        <input type="radio" name="sld" id="slide1">
        <input type="radio" name="sld" id="slide2">
        <input type="radio" name="sld" id="slide3">
        <input type="radio" name="sld" id="slide4">
        <input type="radio" name="sld" id="slide5">

        <!-- slides -->
        <div class="jeepslides">
            <div class="jeepslide sli">
                <img src="images/SafariJeepReservationPage/SafariJeepSlider/jeep1.jpg" alt="jeep1">
            </div>

            <div class="jeepslide">
                <img src="images/SafariJeepReservationPage/SafariJeepSlider/jeep2.jpg" alt="jeep2">
            </div>

            <div class="jeepslide">
                <img src="images/SafariJeepReservationPage/SafariJeepSlider/jeep3.jpg" alt="jeep3">
            </div>

            <div class="jeepslide">
                <img src="images/SafariJeepReservationPage/SafariJeepSlider/jeep4.jpg" alt="jeep4">
            </div>

            <div class="jeepslide">
                <img src="images/SafariJeepReservationPage/SafariJeepSlider/jeep5.jpg" alt="jeep5">
            </div>
        </div>

        <a href="#" class="arrow left"><i class="fas fa-arrow-circle-left"></i></a>
        <a href="#" class="arrow right"><i class="fas fa-arrow-circle-right"></i></a>

        <div class="radiojeep">
            <label for="sld1" class="radbtn active"></label>
            <label for="sld2" class="radbtn"></label>
            <label for="sld3" class="radbtn"></label>
            <label for="sld4" class="radbtn"></label>
            <label for="sld5" class="radbtn"></label>
        </div>
    </div>

    <!-- title -->
    <div class="Jeepsection">
        <div class="title">
            <h1>Safari Jeep in Sri Lanka</h1>
            <div class="tour">
                <a href="./r_tourguide.html" target="_blank">Tour Guide</a>
                <a href="jeepForm.php" target="_blank">Reserve</a>
            </div>
        </div>

        <!-- locations -->
        <ul class="location">
            <li><a href="./r_yala.php" target="_blank">Yala Safari Jeep</a></li>
            <li><a href="./r_udawalawa.php" target="_blank">Udawalawe Safari Jeep</a></li>
            <li><a href="./r_wilpattu.php" target="_blank">Wilpattu Safari Jeep</a></li>
            <li><a href="./r_kumana.php" target="_blank">Kumana Safari Jeep</a></li>
            <li><a href="./r_bundala.php" target="_blank">Bundala Safari Jeep</a></li>
            <li><a href="./r_minneriya.php" target="_blank">Minneriya Safari Jeep</a></li>
        </ul>

        <div class="about">
            <p>Experience the thrill of exploring the untamed wilderness and encountering majestic 
               wildlife up close with our Safari Jeep Services. Our experienced and knowledgeable 
               guides will take you on an unforgettable journey through the breathtaking landscapes 
               and diverse ecosystems of our safari destinations.
            </p>
            <img src="images/SafariJeepReservationPage/safari-jeep-1.jpg" alt="safarijeep">
            <p>
                Comfortable and spacious safari jeeps equipped with open roofs for better wildlife viewing.
                Expert guides who are passionate about wildlife conservation and dedicated to providing a 
                safe and informative safari experience.
                Opportunities to witness a wide range of wildlife species in their natural habitats, 
                including elephants, leopards, lions and many more.
                Fascinating insights into the behavior, habits, and conservation efforts related to the wildlife you encounter.
                Photographic opportunities to capture stunning images of the wildlife and landscapes.
            </p>
        </div>

        <img src="images/SafariJeepReservationPage/footerjeep.jpg" alt="jeepfooter">
    </div>

    <!-- footer -->
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

    <script src="Js/r_jeepreservation.js"></script>
</body>
</html>