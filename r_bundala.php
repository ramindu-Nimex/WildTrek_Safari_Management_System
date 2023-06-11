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
    <title>Bundala</title>
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

    <!-- yala -->
    <div class="location">

        <h1>Bundala Safari Tours</h1>
        <div class="locationphoto">
            <img src="images/Bundala/bundala1.jpg" alt="bundala1">
            <img src="images/Bundala/bundala2.jpg" alt="bundala2">
            <img src="images/Bundala/bundala3.jpg" alt="bundala3">
            <img src="images/Bundala/bundala4.jpg" alt="bundala4">
            <img src="images/Bundala/bundala5.jpg" alt="bundala5">
            <img src="images/Bundala/bundala6.jpg" alt="bundala6">
            <img src="images/Bundala/bundala7.jpg" alt="bundala7">
            <img src="images/Bundala/bundala8.jpg" alt="bundala8">
            <img src="images/Bundala/bundala9.jpg" alt="bundala9">
            <img src="images/Bundala/bundala10.jpg" alt="bundala10">
            <img src="images/Bundala/bundala11.jpg" alt="bundala11">
            <img src="images/Bundala/bundala12.jpg" alt="bundala12">
        </div>
    </div>

    <!-- yala packages -->
    <div class="locationpackages">
        <div class="campjeep">
            <a href="#aboutlocationcamp">Bundala Safari Camps Pakages</a>
            <a href="#aboutlocationJeep">Bundala Safari Jeep Pakages</a>
        </div>

        <div class="aboutlocation" id="aboutlocationcamp">
            <h1>Bundala Safari Camps Pakages</h1>
            <p>Bundala National Park offers an exceptional opportunity for wild camping amidst 
               the pristine wilderness of Sri Lanka. Nestled in the southern coast, Bundala is 
               not only renowned for its abundant wildlife but also for its captivating camping experiences.<br>
               Camping in Bundala allows visitors to immerse themselves in the sights, sounds, 
               and tranquility of the natural surroundings. The park's designated camping areas 
               are strategically located to provide a safe and comfortable setting while offering an authentic wilderness experience.<br>
               Camping in Bundala National Park offers an incredible chance to connect with nature, witness stunning wildlife, and create lifelong memories in the heart of Sri Lanka's wilderness.
            </p>
            <img src="images/Bundala/bundala camp 1.jpg" alt="bundala camp 1">
            <img src="images/Bundala/bundala camp 2.jpg" alt="bundala camp 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Bundala Standard Camping Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night/2 days</li>
                            <li>2. Tent Accommodation: Provided</li>
                            <li>3. Meals: Breakfast, Lunch, and Dinner included</li>
                            <li>4. Basic amenities: Toilets, Showers, and Cooking areas available</li>
                            <li>5. Experienced Camp Guides: Provided</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Bundala Luxury Camping Package<br>From Rs.40000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 2 nights/3 days</li>
                            <li>2. Luxury Tent Accommodation: Provided (Spacious and Well-appointed)</li>
                            <li>3. Meals: Breakfast, Lunch, and Dinner included</li>
                            <li>4. Private dining area and personalized service</li>
                            <li>5. Bird Watching Excursion: Included</li>
                            <li>6. Sunset Boat Ride: Included</li>
                            <li>7. Basic amenities: Toilets, Showers, and Cooking areas available</li>
                            <li>8. Experienced Camp Guides: Provided</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Bundala Premium Exclusive Camping Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 3 nights/4 days</li>
                            <li>2. Luxury Tent Accommodation: Provided (Spacious and Well-appointed)</li>
                            <li>3. Meals: Breakfast, Lunch, and Dinner included</li>
                            <li>4. Guided Wildlife Safaris: Multiple safaris and nature walks included</li>
                            <li>5. Bird Watching Excursion: Included</li>
                            <li>6. Sunset Boat Ride: Included</li>
                            <li>7. Special Wildlife Photography Session: Included</li>
                            <li>8. Private Chef Service: Available</li>
                            <li>9. Basic amenities: Toilets, Showers, and Cooking areas available</li>
                            <li>10. Experienced Camp Guides: Provided</li>
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
            <h1>Bundala Safari Jeep Packages</h1>
            <p>
               Bundala National Park is a renowned wild safari destination located in the southern coast of Sri Lanka. 
               It is a unique and diverse ecosystem that encompasses wetlands, lagoons, and sand dunes, 
               making it a haven for a wide variety of wildlife.<br>
               The park is particularly famous for its birdlife, making it a paradise for birdwatching enthusiasts. 
               With over 200 species of birds, including both resident and migratory birds, Bundala is a haven for bird lovers. 
               Visitors can spot a range of birds such as flamingos, pelicans, herons, storks, and many more. 
               The park's wetlands provide an ideal breeding ground for these beautiful creatures.<br>
               One of the main attractions of Bundala National Park is the scenic Jeep safaris. 
               Visitors can embark on thrilling jeep rides that take them through the park's diverse landscapes, 
               including marshlands, grasslands, and salt pans. Experienced guides accompany the safaris, 
               providing valuable insights into the park's flora and fauna.<br>
               For those seeking a unique and immersive wildlife experience, Bundala National Park offers an unforgettable 
               adventure filled with stunning natural beauty, remarkable bird sightings, and the chance to witness a 
               wide array of wildlife in their natural habitat.
            </p>
            <img src="images/Bundala/bundala jeep 1.jpg" alt="bundala jeep 1">
            <img src="images/Bundala/bundala jeep 2.jpg" alt="bundala jeep 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Bundala Morning Safari Package<br>From Rs.10000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 3 hours</li>
                            <li>2. Start Time: Early morning, around sunrise</li>
                            <li>3. Safari Jeep: Provided (Open-top 4x4 vehicle)</li>
                            <li>4. Experienced Safari Driver/Guide: Provided</li>
                            <li>5. Highlights: Birdwatching, spotting crocodiles, exploring wetlands</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Bundala Afternoon Safari Package<br>From Rs.10000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 3 hours</li>
                            <li>2. Start Time: Afternoon, around mid-afternoon</li>
                            <li>3. Safari Jeep: Provided (Open-top 4x4 vehicle)</li>
                            <li>4. Experienced Safari Driver/Guide: Provided</li>
                            <li>5. Highlights: Spotting elephants, birdwatching, observing wildlife behavior</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Bundala Full-Day Safari Package<br>From Rs.20000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Full day (approximately 6-8 hours)</li>
                            <li>2. Start Time: Early morning, around sunrise</li>
                            <li>3. Safari Jeep: Provided (Open-top 4x4 vehicle)</li>
                            <li>4. Experienced Safari Driver/Guide: Provided</li>
                            <li>5. Meals: Packed breakfast and lunch included</li>
                            <li>6. Highlights: Comprehensive wildlife exploration, birdwatching, crocodile sightings, wetland exploration</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Bundala Customized Safari Package<br>From Rs.25000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Flexible, can be tailored to your preferences</li>
                            <li>2. Start Time: Can be arranged according to your schedule</li>
                            <li>3. Safari Jeep: Provided (Open-top 4x4 vehicle)</li>
                            <li>4. Experienced Safari Driver/Guide: Provided</li>
                            <li>5. Customization Options: Choose specific areas of interest, duration, and activities</li>
                            <li>6. Highlights: Customized wildlife experience based on your preferences</li>
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
        <img src="images/Bundala/bundalafooter.jpg" alt="bundala footer">
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