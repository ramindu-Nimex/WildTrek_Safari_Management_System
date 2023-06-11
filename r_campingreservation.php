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
    <title>Camping Reservation</title>
    <link rel="stylesheet" href="styles/r_campingreservation.css">
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
                <li><a href="./r_main.php" target="_blank">Home</a></li>
                <li><a href="#">Safari Hotels</a></li>
                <li class="drop"><a href="#">Safari Tours<i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="./r_jeepreservation.php" target="_blank">Safari Jeep Reservation</a></li>
                        <li><a href="./r_campingreservation.php" target="_blank">Camping Reservation</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./r_ourteam.php" target="_blank">Meet our team</a></li>
                <li><a href="#">About Us</a></li>
                <li class="sign"><a href="#">Hi, <?php echo $_SESSION['userName']; ?> <i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- slider -->
    <div class="campslider">
        <input type="radio" name="sld" id="slide1">
        <input type="radio" name="sld" id="slide2">
        <input type="radio" name="sld" id="slide3">
        <input type="radio" name="sld" id="slide4">
        <input type="radio" name="sld" id="slide5">

        <!-- slides -->
        <div class="campslides">
            <div class="campslide sli">
                <img src="images/CampingReservationPage/CampingSlider/camping1.jpg" alt="camp1">
            </div>

            <div class="campslide">
                <img src="images/CampingReservationPage/CampingSlider/camping2.jpg" alt="camp2">
            </div>

            <div class="campslide">
                <img src="images/CampingReservationPage/CampingSlider/camping3.jpg" alt="camp3">
            </div>

            <div class="campslide">
                <img src="images/CampingReservationPage/CampingSlider/camping4.jpg" alt="camp4">
            </div>

            <div class="campslide">
                <img src="images/CampingReservationPage/CampingSlider/camping5.jpg" alt="camp5">
            </div>
        </div>

        <a href="#" class="arrow left"><i class="fas fa-arrow-circle-left"></i></a>
        <a href="#" class="arrow right"><i class="fas fa-arrow-circle-right"></i></a>

        <div class="radiocamp">
            <label for="slide1" class="radbtn active"></label>
            <label for="slide2" class="radbtn"></label>
            <label for="slide3" class="radbtn"></label>
            <label for="slide4" class="radbtn"></label>
            <label for="slide5" class="radbtn"></label>
        </div>
    </div>

    <!-- title -->
    <div class="campsection">
        <div class="title">
            <h1>Safari Camps in Sri Lanka</h1>
            <a href="./campingForm.php" target="_blank">Reserve</a>
        </div>

        <!-- locations -->
        <ul class="location">
            <li><a href="./r_yala.php" target="_blank">Yala Safari Camp</a></li>
            <li><a href="./r_udawalawa.php" target="_blank">Udawalawe Safari Camp</a></li>
            <li><a href="./r_wilpattu.php" target="_blank">Wilpattu Safari Camp</a></li>
            <li><a href="./r_kumana.php" target="_blank">Kumana Safari Camp</a></li>
            <li><a href="./r_bundala.php" target="_blank">Bundala Safari Jeep</a></li>
            <li><a href="./r_minneriya.php" target="_blank">Minneriya Safari Jeep</a></li>
        </ul>

        <div class="about">
            <p>Live in the heart of the jungle with nothing but the sounds of the wild, 
                the smell of nature and the starlit skies to keep you company. 
                Be immersed in an authentic and exclusive Safari Camping experience 
                in the wilds of the <b>Yala, Wilpattu, Udawalawe and Kumana National Parks.</b><br><br> 
                Sri Lakan Safari offers you the opportunity to connect with the wild and 
                be one with nature. Experience the joy and excitement of wakening up right
                in the heart of the jungle. Be awakened to the sound of birds chirping at 
                your doorstep or the crowing of the Jungle Fowl inviting you to join in the
                excitement and intrigue of another beautiful day in the wilds of Sri Lanka.
            </p>
            <img src="images/CampingReservationPage/safari-camp-1.jpg" alt="campfooter1">
            <p>In <b>Yala</b> we offer an authentic tented camping expereince renowned for a highly 
                personalized service. Yala Safari Camp is a permanent facility located on the
                border of the park and comes with comfortable, spacious accommodation, 
                en suite bathroom and all amenities.
            </p>
            <p>
                In <b>Udawalawe</b> we offer a fully serviced classic mobile tented camp setting for 
                those seeking a down-to-earth camping experience. This means the camp is pitched 
                exclusively for you right inside the Park and it comes with comfortable accommodation, 
                full bedding and bathrooms situated alongside.
            </p>
            <p>
                Our Safari Camp in <b>Wilpattu</b> is just by the park gate with a nice wild locality. 
                The boasts for four spacious tents, a great base to explore the wilderness of <b>Wilpattu National Park.</b>
            </p>
            <p>
                Our Kumana Safari Camp is situated inside <b>Kumana National Park</b> is a mobile tented camp, at the very heart
                of the wilderness and game viewing area. Kumana is known for its thick jungle and the park is virtually a virgin jungle and not crowded.
            </p>
            <p>
                Camping in <b>Bundala</b> allows visitors to immerse themselves in the sights, sounds, 
                and tranquility of the natural surroundings. The park's designated camping areas 
                are strategically located to provide a safe and comfortable setting while offering an authentic wilderness experience.
            </p>
            <p>
                <b>Minneriya</b> wild camping is the perfect blend of adventure, serenity, and wildlife exploration, 
                allowing you to disconnect from the modern world and reconnect with nature in its purest form.
            </p>
        </div>

        <img src="images/CampingReservationPage/footer.jpg" alt="campfooter2">
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

    <script src="Js/r_campingresrvation.js"></script>
</body>
</html>