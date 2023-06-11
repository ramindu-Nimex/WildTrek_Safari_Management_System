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
    <title>Udawalawa</title>
    <link rel="stylesheet" href="styles/r_location.css">
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

    <!-- Udawalawe -->
    <div class="location">

        <h1>Udawalawe Safari Tours</h1>
        <div class="locationphoto">
            <img src="images/Udawalawe/udawalawa1.jpg" alt="Udawalawe1">
            <img src="images/Udawalawe/udawalawa2.jpg" alt="Udawalawe2">
            <img src="images/Udawalawe/udawalawa3.jpg" alt="Udawalawe3">
            <img src="images/Udawalawe/udawalawa4.jpg" alt="Udawalawe4">
            <img src="images/Udawalawe/udawalawa5.jpg" alt="Udawalawe5">
            <img src="images/Udawalawe/udawalawa6.jpg" alt="Udawalawe6">
            <img src="images/Udawalawe/udawalawa7.jpg" alt="Udawalawe7">
            <img src="images/Udawalawe/udawalawa8.jpg" alt="Udawalawe8">
            <img src="images/Udawalawe/udawalawa9.jpg" alt="Udawalawe9">
            <img src="images/Udawalawe/udawalawa10.jpg" alt="Udawalawe10">
            <img src="images/Udawalawe/udawalawa11.jpg" alt="Udawalawe11">
            <img src="images/Udawalawe/udawalawa12.jpg" alt="Udawalawe12">
        </div>
    </div>

    <!-- Udawalawe packages -->
    <div class="locationpackages">
        <div class="campjeep">
            <a href="#aboutlocationcamp">Udawalawe Safari Camps Pakages</a>
            <a href="#aboutlocationJeep">Udawalawe Safari Jeep Pakages</a>
        </div>

        <div class="aboutlocation" id="aboutlocationcamp">
            <h1>Udawalawe Safari Camps Pakages</h1>
            <p>The Udawalawe Classic Safari Camp is a mobile camp situated within the 
               National Park itself, thereby allowing visitors to experience an authentic 
               jungle camping experience. Waking up right in the middle of the jungle to 
               the sounds of the wild and cheerful bird song is a rare luxury by itself, 
               something many dreams of and only a fortunate few really experience. 
               It is all about living in the wilds of Sri Lanka with only the wildlife for company.<br>
               The tents are spacious and comfortable with inviting beds and crispy clean linen, 
               solar powered lamps with washroom and shower situated alongside.<br>
               Mornings at the campsite are picture postcard perfect. Be greeted by 
               drifts of cool breeze and curtains of greenery, music wafting from the 
               tree tops and a hot cup of tea or coffee and if you wish you can take 
               a cool dip in the river that flows by the campsite. Be treated to 
               authentic Sri Lankan cuisine freshly cooked in our jungle kitchen. 
               Breakfast will be served on the banks of the river, so you eat virtually seated 
               in the water with your feet enjoying the cool vibes.<br>
               After a wild safari in the park, the nights at the campsite lit with hurricane 
               lamps and copra torches is indeed welcoming. Be greeted to a delectable Sri Lankan 
               dinner served out in the open or gather around the roaring campfire with a 
               cool beer in hand and enjoy a tantalizing BBQ.
            </p>
            <img src="images/Udawalawe/udawalawe camp1.jpg" alt="Udawalawe camp 1">
            <img src="images/Udawalawe/udawalawe camp2.jpg" alt="Udawalawe camp 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Udawalawe Overnight Camping Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night, 2 days</li>
                            <li>2. Accommodation in a comfortable camping site near Udawalawe National Park</li>
                            <li>3. Dinner and bonfire at the campsite</li>
                            <li>4. Bonfire and evening entertainment</li>
                            <li>5. Breakfast at the campsite</li>
                            <li>6. Guided morning and evening nature walks around the campsite</li>
                            <li>7. Opportunity to explore the natural beauty of the park and spot various wildlife species</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Udawalawe Luxury Camping Package<br>From Rs.60000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2 nights, 3 days</li>
                            <li>2. Luxury tented accommodation in a private campsite</li>
                            <li>3. Gourmet meals prepared by a dedicated chef, including multi-course dinners and breakfasts</li>
                            <li>4. Sundowners and stargazing experience</li>
                            <li>5. Evening campfire, live music, or cultural performances</li>
                            <li>6. Wildlife photography sessions with a professional photographer</li>
                            <li>7. Nature walks and bird watching tours</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Udawalawe Family Camping Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night, 2 days</li>
                            <li>2. Family-friendly camping experience near Udawalawe National Park</li>
                            <li>3. Accommodation in spacious tents suitable for families</li>
                            <li>4. Campfire, storytelling, and fun activities for children</li>
                            <li>5. Evening barbecue dinner at the campsite</li>
                            <li>6. Morning wildlife safari with the chance to see elephants, deer, birds, and more</li>
                            <li>7. Breakfast at the campsite</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
        </div>

        <!-- jeep packages -->
        <div class="aboutlocation" id="aboutlocationJeep">
            <h1>Udawalawe Safari Jeep Packages</h1>
            <p>
                Welcome to Udawalawe Wild Safari Jeep Tours! Get ready for an unforgettable adventure 
                in one of Sri Lanka's premier national parks. Our experienced and knowledgeable safari 
                jeep guides are here to ensure you have an exceptional wildlife viewing experience.<br>
                At Udawalawe, you'll have the opportunity to witness diverse wildlife in their natural habitat. 
                Our safari jeeps are specially designed for optimal wildlife viewing, with open-air seating and 
                elevated vantage points for better visibility. With the guidance of our expert guides, 
                you'll have a higher chance of spotting majestic elephants, leopards, deer, wild boars, 
                crocodiles, and a variety of bird species.<br>
                Our safari jeep tours are designed to provide you with a thrilling and immersive experience 
                while prioritizing the safety and comfort of our guests. Our guides are well-versed in the park's 
                rules and regulations, ensuring responsible wildlife encounters and minimal disturbance to the animals.<br>
                Whether you're a wildlife enthusiast, a nature lover, or simply seeking an adventurous experience, 
                our Udawalawe Wild Safari Jeep Tours will leave you with lasting memories. Immerse yourself in the 
                breathtaking beauty of Udawalawe National Park and embark on an exciting journey through the heart of Sri Lanka's wildlife paradise.<br>
                Book your safari jeep tour with us and get ready for an incredible wildlife adventure in Udawalawe!
            </p>
            <img src="images/Udawalawe/udawalawe jeep 1.jpg" alt="Udawalawe jeep 1">
            <img src="images/Udawalawe/udawalawe jeep2.jpg" alt="Udawalawe jeep 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Udawalawe Half-Day Safari Jeep Package<br>From Rs.8000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 4 hours</li>
                            <li>2. Morning or afternoon safari options</li>
                            <li>3. Experienced safari jeep guide</li>
                            <li>4. Wildlife sightings of elephants, leopards, deer, birds, and more</li>
                            <li>5. Refreshments and snacks during the safari</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Udawalawe Full-Day Safari Jeep Package<br>From Rs.15000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 8 hours</li>
                            <li>2. Morning to afternoon safari</li>
                            <li>3. Experienced safari jeep guide</li>
                            <li>4. Extended wildlife exploration</li>
                            <li>5. Opportunity to spot a variety of animals, including elephants, leopards, deer, crocodiles, and birds</li>
                            <li>6. Picnic lunch in the park</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Udawalawe Exclusive Private Safari Jeep Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Flexible timing (minimum 4 hours)</li>
                            <li>2. Private safari jeep exclusively for your group</li>
                            <li>3. Personalized itinerary and flexible schedule</li>
                            <li>4. Expert safari guide dedicated to your group</li>
                            <li>5. Maximum wildlife viewing opportunities</li>
                            <li>6. Customized refreshments and snacks</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Udawalawe Sunrise or Sunset Safari Jeep Package<br>From Rs.10000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 4 hours</li>
                            <li>2. Early morning or late afternoon safari</li>
                            <li>3. Spectacular sunrise or sunset views</li>
                            <li>4. Opportunity to witness active wildlife during these hours</li>
                            <li>5. Experienced safari jeep guide</li>
                            <li>6. Refreshments included</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="locationimg">
        <img src="images/Udawalawe/udawalawe footer.jpg" alt="Udawalawe footer">
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

    <script src="Js/r_main.js"></script>
</body>
</html>