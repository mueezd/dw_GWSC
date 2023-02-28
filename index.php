
<?php

@include 'config.php';
// $sql = "UPDATE visitor_counter SET counter = visits+1 WHERE id = 1";
// $conn->query($sql);

$sql = "SELECT counter FROM visitor_counter WHERE id = 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $visits = $row["visits"];
//     }
// } else {
//     echo "no results";
// }
// $conn->close();

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Wild Swimming and Campining</title>
    <!-- Swipper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- fontawsam cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customer CSS fie link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start -->
    <header>
        <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="information.php">information</a>
            <a href="pitch.php">pitch type</a>
            <a href="availability.php">availability</a>
            <a href="reviews.php">reviews</a>
            <a href="feature.php">feature</a>
            <a href="contact.php">contact</a>
            <a href="localattractions.php">local attractions</a>
            <a class="active" href="login_form.php">Login</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bar"></i>
            <i class="fas fa-search" id="search-icons"></i>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!-- header section end -->

    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section start -->
    <section class="home" id="#home">
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Offer</span>
                        <h3>Spicy Noodols</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, dolorum!</p>
                        <a href="#" class="btn">Register Now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-1.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Offer</span>
                        <h3>Spicy Noodols</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, dolorum!</p>
                        <a href="#" class="btn">Register Now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-2.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Offer</span>
                        <h3>Spicy Noodols</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, dolorum!</p>
                        <a href="#" class="btn">Register Now</a>
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
                <h2>2000+</h2>
                <p>Total Visitor</p>
            </div>
            <div class="row">
                <h2>6000+</h2>
                <p>Total Customer</p>
            </div>
            <div class="row">
                <h2>7000+</h2>
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
                <h3>Good Feature</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$14.95</span>
                <a href="" class="btn">Add to Cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-1.jpg" alt="">
                <h3>Good Feature</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$14.95</span>
                <a href="" class="btn">Add to Cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-1.jpg" alt="">
                <h3>Good Feature</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$14.95</span>
                <a href="" class="btn">Add to Cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-1.jpg" alt="">
                <h3>Good Feature</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$14.95</span>
                <a href="" class="btn">Add to Cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/f-1.jpg" alt="">
                <h3>Good Feature</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$14.95</span>
                <a href="" class="btn">Add to Cart</a>
            </div>
        </div>
    </section>
    <!-- Features section End -->

    <!-- information section start -->
    <section class="information" id="information">
        <h3 class="sub-heading">Information</h3>
        <h1 class="heading">Why choose us?</h1>
        <div class="row">
            <div class="image">
                <img src="images/info-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, quod
                    modi molestias maxime velit beatae magni aut ea sapiente! Aliquam odit facere
                    sequi ad sint ipsam sed aspernatur a nesciunt.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum sequi alias a
                    incidunt repellat sint quo vero voluptatum vitae repellendus!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Free Delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Easy Payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 Service</span>
                    </div>
                </div>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>

    </section>
    <!-- information section Ends -->

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



    <!-- local attracton section start-->
    <section class="locala" id="locala">
        <h3 class="sub-heading">local attracton</h3>
        <h1 class="heading">Why choose us</h1>
    </section>
    <!-- local attracton section End-->

    <!-- Contact section start-->
    <section class="contact" id="contact">
        <h3 class="sub-heading">Contact</h3>
        <h1 class="heading">Why choose us</h1>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>Your Name:</span>
                    <input type="text" placeholder="enter your name" name="" id="">
                </div>
                <div class="input">
                    <span>Your Name:</span>
                    <input type="number" placeholder="enter your number" name="" id="">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Order:</span>
                    <input type="text" placeholder="enter your order" name="" id="">
                </div>
                <div class="input">
                    <span>Your Address:</span>
                    <input type="text" placeholder="enter our address" name="" id="">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Your Queary:</span>
                    <textarea name="" placeholder="Write your Queary" id="" cols="30" rows="10">
                    </textarea>
                </div>
                <div class="input">
                    <span>Your Message:</span>
                    <textarea name="" placeholder="Write your Message" id="" cols="30" rows="10">
                    </textarea>
                </div>
            </div>
            <input type="submit" value="Contact Now" class="btn">
        </form>
    </section>
    <!-- Contact section End-->

    <!-- Footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">UK</a>
                <a href="#">Bangladesh</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">information</a>
                <a href="#">pitch Type</a>
                <a href="#">Availability</a>
                <a href="#">Reviews</a>
                <a href="#">Features</a>
                <a href="#">Contact</a>
                <a href="#">Local Attractions</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">+111-222-7890</a>
                <a href="#">info@gwsc.org</a>
                <a href="#">Park Street London, United kingdom</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">youtube</a>
            </div>
        </div>
        <div class="credit">copyright @ 2023 by <span>deepro__</span></div>
    </section>
    <!-- Footer section end -->


    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>