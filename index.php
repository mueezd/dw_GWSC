<?php

@include 'components/config.php';
$title = "Home Page";
$visitor_counter_add = $conn->prepare("UPDATE visitor_counter SET counter = counter+1 WHERE id = 1;");
$visitor_counter_add->execute();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Global Wild Swimming and Campining</title>
    <!-- Swipper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- fontawsam cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- External Custom CSS fie link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="#searchId">
    <!-- search form start -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- search form End -->
    <!-- header section start -->
    <?php include 'components/header.php'; ?>
    <!-- header section end -->

    <!-- home section start -->
    <section class="home" id="#home">
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>weekend camping</span>
                        <h3>Book Now</h3>
                        <p>Reservations for our 2023 weekends will begin in early March; we will advertise here and on Facebook a week before bookings are available.!</p>
                        <a href="register.php" class="btn">Register Now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-1.jpg" alt="Image of slide for register a new user">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Special Offer</span>
                        <h3>Information</h3>
                        <p>Camping, touring, and glamping are available in beautiful Snowdon by a river that is perfect for swimming, fishing, and walking.</p>
                        <a href="information.php" class="btn">More Info</a>
                    </div>
                    <div class="image">
                        <img src="images/home-2.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>What Barefoot Campers say</span>
                        <h3>Reviews</h3>
                        <p>Want a memorable outdoor adventure? Wild Swimming and Camping! This is the best way to explore nature, whether you're a seasoned camper or a novice.</p>
                        <a href="review.php" class="btn">Check Now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section End -->

    <!-- section counter start -->
    <section class="counter-section">
        <div class="counter-column">
            <div class="row">
                <?php
                $select_counter = $conn->prepare("SELECT * FROM `visitor_counter` WHERE id = 1");
                $select_counter->execute();
                if ($select_counter->rowCount() > 0) {
                    $fetch_counter = $select_counter->fetch(PDO::FETCH_ASSOC);
                ?>
                    <h2><?= $fetch_counter['counter']; ?>+</h2>
                <?php
                }
                ?>
                <p>Total Visitor</p>
            </div>
            <div class="row">
                <?php
                $select_user = $conn->prepare("SELECT COUNT(id) FROM `users`");
                $select_user->execute();
                if ($select_user->rowCount() > 0) {
                    $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);
                ?>
                    <h2><?= $fetch_user['COUNT(id)']; ?>+</h2>
                <?php
                }
                ?>
                <p>Total Customer</p>
            </div>
            <div class="row">
                <?php
                $select_reviews = $conn->prepare("SELECT COUNT(Id) FROM `reviews`;");
                $select_reviews->execute();
                if ($select_reviews->rowCount() > 0) {
                    $fetch_reviews = $select_reviews->fetch(PDO::FETCH_ASSOC);
                ?>
                    <h2><?= $fetch_reviews['COUNT(Id)']; ?>+</h2>
                <?php
                }
                ?>
                <p>Total Reviews</p>
            </div>
        </div>
    </section>

    <!-- Features section starts -->
    <section class="features" id="feature">
        <h3 class="sub-heading">Our Features</h3>
        <h1 class="heading">Popular features</h1>
        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-1.jpg" alt="">
                <h3>leisure facilities</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="feature.php" class="btn">Read More..</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-2.jpg" alt="">
                <h3>entertainment</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="feature.php" class="btn">Read More..</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-3.webp" alt="">
                <h3>car parking</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="feature.php" class="btn">Read More..</a>
            </div>
        </div>
    </section>
    <!-- Features section End -->

    <!-- location maps section start -->
    <section class="locationmaps">
        <h3 class="sub-heading">Camping Locations</h3>
        <h1 class="heading">Choose your Location</h1>
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623588.1411459859!2d-0.5531635990128747!3d52.37239322605558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c72fe0155517%3A0x9df0b6a5da4ed30b!2sWild%20Swimming%20Coach!5e0!3m2!1sen!2sbd!4v1677846917650!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>

        </div>
    </section>
    <!-- location maps section end -->

    <!-- information section start -->
    <section class="information" id="information">
        <h3 class="sub-heading">Information</h3>
        <h1 class="heading">Why choose us?</h1>
        <div class="row">
            <div class="image">
                <img src="images/information-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>pitch types and availability</h3>
                <p>Pitch types for camping and caravanning include tent pitches, touring caravan pitches, and motorhome pitches. Tent pitches are ideal for those who prefer a more authentic outdoor experience, while touring caravan pitches offer more space and amenities. Motorhome pitches are designed to accommodate larger vehicles and often come with electrical hook-ups and waste disposal facilities. The availability of pitches varies depending on the location and season, so it's important to book in advance to secure your spot. It's also important to note that some campsites may have restrictions on the size and type of pitches available.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-campground"></i>
                        <span>tent pitch</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-caravan"></i>
                        <span>caravan pitch</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-home"></i>
                        <span>motorhome pitch</span>
                    </div>
                </div>
                <a href="information.php" class="btn">Learn More</a>
            </div>
        </div>
        </div>
    </section>
    <!-- information section Ends -->

    <!-- Wild Swiming kit section using RSS Start -->
    <section>
        <h3 class="sub-heading">choose your kit</h3>
        <h1 class="heading">Wild Swiming kit Zone</h1>
        <div>
            <rssapp-wall id="OHL7j4oDZ5oiuV6Z"></rssapp-wall>
            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
        </div>
    </section>
    <!-- Wild Swiming kit section using RSS Start -->

    <!-- availability section start  -->
    <section class="availability" id="availability">
        <h3 class="sub-heading">availability</h3>
        <h1 class="heading">Our Avaiity zone</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/a-1.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="contect">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mountain Location</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                    <a href="#" class="btn">Book Now</a>
                    <span class="price">$12.99</span>
                </div>
            </div>
        </div>
    </section>
    <!-- availability section ends  -->

    <!-- News And Updates using RSS feed section start  -->
    <section>
        <h3 class="sub-heading">Keep Updated</h3>
        <h1 class="heading">News & Updates</h1>
        <div>
            <rssapp-wall id="UPGa40TkPUSE6o9i"></rssapp-wall>
            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
        </div>
    </section>
    <!-- News And Updates using RSS feed section End  -->
    <!-- Chat section start -->
    <?php include 'components/chat.php'; ?>
    <!-- Chat section end -->
    
    <!-- Footer section start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer section end -->

    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- sweetalart cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    <?php include 'components/alerts.php'; ?>
</body>
</html>