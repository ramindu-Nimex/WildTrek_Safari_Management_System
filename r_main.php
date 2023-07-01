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
    <title>Home Page</title>
    <link rel="stylesheet" href="styles/r_main.css">
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
                <li><a href="./r_main.php">Home</a></li>
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

    <!-- Slider -->
    <div class="slider">
        <figure>
            <!--One Side-->
            <div class="slide">
                <p>Let's begin the adventure<br>Travel leaves you speechless, <br>then turns you into a story teller.</p>
                <img src="images/mainpage/slides/slide1.jpg" alt="slide1">
            </div>
            <div class="slide">
                <p>Come along on the wild trek <br>to feel the incredible experiences <br>It is better to  see something <br>once than to hear about it a thousand.</p>
                <img src="images/mainpage/slides/slide2.jpg" alt="slide2" height="682px">
            </div>
            <div class="slide">
                <p>Choose what you want to do camping or safari?<br>We travel not to escape life, <br>but for life not to escape us.</p>
                <img src="images/mainpage/slides/slide3.jpg" alt="slide3">
            </div>
            <div class="slide">
                <p>Meet the eye-cathching scenarios along the wild life.<br>If I've ever seen magic, it's been in Sri Lanka!</p>
                <img src="images/mainpage/slides/slide4.jpg" alt="slide4">
            </div>
            <div class="slide">
                <p>What for watiting?<br> Come and make best memeories with the wild trek!<br>If there were one more thing i could do,<br> it would be to go on safari once again.</p>
                <img src="images/mainpage/slides/slide5.jpg" alt="slide5">
            </div>
        </figure>
    </div>

    <!-- about wildtrek -->
    <div class="intro">
        <div class="logo3">
            <img src="images/logo & footer image/download.png" alt="logo" width="60px" height="60px">
            <h1>WILD<span>TREK</span></h1>
        </div>

        <div class="intro1">
            <p>
                At WildTrek Safari System, we invite you to experience the thrill and beauty of the natural world. 
                Immerse yourself in the sights and sounds of the wild as you encounter magnificent wildlife in their natural habitats.
                Whether you're a nature enthusiast, wildlife photographer, or simply seeking adventure, 
                our safari tours offer a once-in-a-lifetime opportunity to witness the wonders of nature up close.<br><br>
                Explore our website, learn more about our safari packages, and book your next wildlife adventure. 
                Get ready to embark on an extraordinary journey filled with captivating wildlife, stunning landscapes, and unforgettable memories
            </p>
        </div>

        <div class="call">
            <h2>Call us now to plan your next safari 0112345678</h2>
        </div>
    </div>

    <!-- Special promo-->
    <section class="special">
        <div class="promo">
            <h2>Special Promo & Special experience</h2>
        </div>

        <div class="mainbox">
            <div class="box1">
                <h3>10% Off</h3>
                <p>Up to 5 passengers on safari tours</p>
                <div class="layer">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
    
            <div class="box1 pic1">
                <h3>20% Off</h3>
                <p>Up to 10 passengers on safari tours</p>
                <div class="layer">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
    
            <div class="box1 pic2">
                <h3>25% Off</h3>
                <p>Up to 15 passengers on safari tours</p>
                <div class="layer">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination-->
    <section class="destination">
        <div class="dest">
            <h2>Destination</h2>
        </div>

        <div class="maincontent">
            <div class="row">
                <a href="./r_yala.html" target="_blank"><img src="images/mainpage/destination/dest1.jpg" alt="dest1" width="300px" height="250px" ></a>
                <h4>Yala</h4>
            </div>

            <div class="row">
                <a href="./r_wilpattu.html" target="_blank"><img src="images/mainpage/destination/dest2.jpg" alt="dest2" width="300px" height="250px"></a>
                <h4>Wilpattu</h4>
            </div>

            <div class="row">
                <a href="./r_udawalawa.html" target="_blank"><img src="images/mainpage/destination/dest3.jpg" alt="dest3" width="300px" height="250px"></a>
                <h4>Udawalawe</h4>
            </div>

            <div class="row">
                <a href="./r_kumana.html" target="_blank"><img src="images/mainpage/destination/dest4.jpg" alt="dest4" width="300px" height="250px"></a>
                <h4>Kumana</h4>
            </div>

            <div class="row">
                <a href="./r_bundala.html" target="_blank"><img src="images/mainpage/destination/dest5.jpg" alt="dest5" width="300px" height="250px"></a>
                <h4>Bundala</h4>
            </div>

            <div class="row">
                <a href="./r_minneriya.html" target="_blank"><img src="images/mainpage/destination/dest6.jpg" alt="dest6" width="300px" height="250px"></a>
                <h4>Minneriya</h4>
            </div>
        </div>
    </section>

    <div class="mainimage">
        <img src="images/mainpage/mainfooter.jpg" alt="mainfooter">
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