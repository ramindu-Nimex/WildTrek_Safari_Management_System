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
    <title>Minneriya</title>
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

        <h1>Minneriya Safari Tours</h1>
        <div class="locationphoto">
            <img src="images/minneriya/Minneriya1.jpg" alt="minneriya1">
            <img src="images/minneriya/Minneriya2.jpg" alt="minneriya2">
            <img src="images/minneriya/Minneriya3.jpg" alt="minneriya3">
            <img src="images/minneriya/Minneriya4.jpg" alt="minneriya4">
            <img src="images/minneriya/Minneriya5.jpg" alt="minneriya5">
            <img src="images/minneriya/Minneriya6.jpg" alt="minneriya6">
            <img src="images/minneriya/Minneriya7.jpg" alt="minneriya7">
            <img src="images/minneriya/Minneriya8.jpg" alt="minneriya8">
            <img src="images/minneriya/Minneriya9.jpg" alt="minneriya9">
            <img src="images/minneriya/Minneriya10.jpg" alt="minneriya10">
            <img src="images/minneriya/Minneriya11.jpg" alt="minneriya11">
            <img src="images/minneriya/Minneriya12.jpg" alt="minneriya12">
        </div>
    </div>

    <!-- yala packages -->
    <div class="locationpackages">
        <div class="campjeep">
            <a href="#aboutlocationcamp">Minneriya Safari Camps Pakages</a>
            <a href="#aboutlocationJeep">Minneriya Safari Jeep Pakages</a>
        </div>

        <div class="aboutlocation" id="aboutlocationcamp">
            <h1>Minneriya Safari Camps Pakages</h1>
            <p>Experience the ultimate adventure in the heart of nature with Minneriya wild camping. 
                Set amidst the picturesque landscapes of Minneriya National Park, Sri Lanka, 
                this camping experience offers a unique opportunity to immerse yourself in the wilderness. 
                Leave behind the comforts of urban life and embrace the tranquility of the great outdoors.<br>
                Pitch your tent in a designated camping site within the park, surrounded by the sights and sounds of nature. 
                As the sun sets, witness the sky transform into a canvas of vibrant colors while you gather around a 
                campfire under a starry night sky.<br>
                Minneriya wild camping is the perfect blend of adventure, serenity, and wildlife exploration, 
                allowing you to disconnect from the modern world and reconnect with nature in its purest form.
            </p>
            <img src="images/minneriya/minneriya camp 1.jpg" alt="minneriya camp 1">
            <img src="images/minneriya/minneriya camp 2.jpg" alt="minneriya camp 2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Minneriya Overnight Camping Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night and 2 days</li>
                            <li>2. Camping Location: Minneriya National Park or designated camping sites nearby</li>
                            <li>3. Tent Accommodation: Comfortable camping tents with bedding and basic amenities</li>
                            <li>4. Meals: Campfire dinner, breakfast, and packed lunch during the safari</li>
                            <li>5. Activities: Evening wildlife safari, nature walks, stargazing, campfire, and wildlife photography</li>
                            <li>6. Highlights: Immerse yourself in the wilderness of Minneriya, spend a night under the stars, and listen to the sounds of nature. 
                                Enjoy close encounters with wildlife, explore the park's diverse ecosystem, and indulge in a unique camping experience.</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Minneriya Luxury Camping Package<br>From Rs.60000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: 1 night and 2 days</li>
                            <li>2. Camping Location: Exclusive camping sites with scenic views</li>
                            <li>3. Tent Accommodation: Spacious and well-equipped luxury tents with comfortable bedding and en-suite facilities</li>
                            <li>4. Meals: Gourmet meals prepared by professional chefs, including breakfast, lunch, and dinner</li>
                            <li>5. Activities: Morning and evening wildlife safaris, bird watching, nature walks, and cultural experiences</li>
                            <li>6. Highlights: Experience the beauty of Minneriya National Park while enjoying the comforts of luxury camping. Relax in style amidst the wilderness, 
                                savor delicious meals, and engage in various activities designed to provide a memorable and indulgent camping experience.</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Minneriya Family Camping Package<br>From Rs.50000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Customizable, based on your family's preferences</li>
                            <li>2. Camping Location: Family-friendly camping sites near Minneriya National Park</li>
                            <li>3. Tent Accommodation: Family-sized tents with separate sleeping areas and shared facilities</li>
                            <li>4. Meals: Family-friendly meals, including breakfast, lunch, and dinner</li>
                            <li>5. Activities: Family-oriented wildlife safaris, educational nature walks, storytelling sessions, and outdoor games</li>
                            <li>6. Highlights: Create lasting memories with your family as you embark on an adventurous camping trip. Engage in activities suitable for all ages, 
                                learn about the local wildlife, and bond with your loved ones in the midst of nature.</li>
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
            <h1>Minneriya Safari Jeep Packages</h1>
            <p>
                Embark on an exhilarating safari adventure in Minneriya National Park, Sri Lanka. 
                Known for its magnificent wildlife and breathtaking landscapes, Minneriya offers an 
                unforgettable experience for nature enthusiasts and wildlife lovers. 
                Hop aboard a rugged safari jeep and explore the vast wilderness of the park, 
                accompanied by experienced guides who will help you spot and identify various animal species. 
                Get ready to witness the awe-inspiring gathering of elephants during the dry season, 
                an iconic spectacle that has made Minneriya famous worldwide. Immerse yourself in the beauty of nature, 
                capture stunning photographs, and create memories that will last a lifetime during your 
                Minneriya wild safari jeep experience.
            </p>
            <img src="images/minneriya/minneriya jeep 1.jpg" alt="minneriya jeep1">
            <img src="images/minneriya/minneriya jeep2.jpg" alt="minneriya jeep2">
        </div>

        <div class="campackages">
            <div class="package">
                <h2>Minneriya Half-Day Safari Package<br>From Rs.8000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 4-5 hours</li>
                            <li>2. Jeep Capacity: 4-6 passengers per jeep</li>
                            <li>3. Safari Location: Minneriya National Park</li>
                            <li>4. Highlights: Explore the wildlife-rich Minneriya National Park on a half-day safari. 
                                Encounter a wide variety of animals, including elephants, leopards, deer, crocodiles, and a rich birdlife. 
                                Enjoy the beautiful scenery and learn about the park's ecosystem from an experienced safari guide.</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Minneriya Full-Day Safari Package<br>From Rs.15000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Approximately 8-9 hours</li>
                            <li>2. Jeep Capacity: 4-6 passengers per jeep</li>
                            <li>3. Safari Location: Minneriya National Park and surrounding areas</li>
                            <li>4. Experienced safari guide</li>
                            <li>5. Highlights: Experience a full day of adventure and wildlife sightings in Minneriya National Park and its vicinity. 
                                Enjoy extended game drives to explore different areas, spot diverse wildlife, and capture memorable photographs. 
                                Take breaks for meals and refreshments during the safari.</li>
                        </ul>
                    </div>
                </div>
                <div class="layerPackage">
                    <h4><a href="#">Read More</a></h4>
                </div>
            </div>

            <div class="package">
                <h2>Minneriya Exclusive Private Safari Package<br>From Rs.30000 /=</h2>
                <h3><br><i class="fa-solid fa-clipboard-list"></i>Itinerary</h3>
                <div class="packagedetails">
                    <div>
                        <ul>
                            <li>1. Duration: Customizable based on your preferences</li>
                            <li>2. Jeep Capacity: 4-6 passengers per jeep</li>
                            <li>3. Safari Location: Minneriya National Park or other nearby wildlife reserves</li>
                            <li>4. Highlights: Enjoy a personalized and exclusive safari experience with a private jeep and dedicated safari guide. 
                                Customize the safari itinerary, duration, and focus on specific wildlife or areas of interest. 
                                Benefit from the flexibility to spend more time on sightings and photography opportunities.</li>
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
        <img src="images/minneriya/minneriyafooter.jpg" alt="minneriya footer">
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