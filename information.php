<?php
include 'components/config.php';
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
    <?php include 'components/header.php'; ?>
    <!-- header section end -->

    <!-- information section start -->
    <section id="information">
        <div class="information">
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
                </div>
            </div>
            <br><br>
            <div class="row row-revarse">
                <div class="image">
                    <img src="images/info-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>features</h3>
                    <p>Wild swimming and camping are outdoor activities that offer a chance to connect with nature. Unlike traditional campsites, these sites may not offer leisure facilities or entertainment options. Instead, they prioritize natural amenities such as rivers, lakes, and forests. Car parking is often limited, and showers and internet access may not be available. However, the beauty of the natural surroundings and the opportunity to disconnect from technology and embrace a simpler way of life are part of the appeal of wild swimming and camping.</p>
                    <div class="icons-container">
                        <div class="icons">
                            <i class="fas fa-running"></i>
                            <span>entertainment</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-parking"></i>
                            <span>car parking</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-wifi"></i>
                            <span>internet access</span>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="image">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623588.1411459859!2d-0.5531635990128747!3d52.37239322605558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c72fe0155517%3A0x9df0b6a5da4ed30b!2sWild%20Swimming%20Coach!5e0!3m2!1sen!2sbd!4v1677846917650!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="content">
                    <h3>location</h3>
                    <p>Wild swimming and camping are popular outdoor activities around the world,
                        and the UK is no exception. However, there are also many other locations
                        globally that offer similar opportunities to connect with nature. For example,
                        the beaches of New Zealand and Australia are popular spots for wild swimming,
                        while the national parks of the United States offer stunning landscapes for
                        camping. In Europe, the Alps and the Pyrenees offer excellent wild swimming
                        and camping opportunities. Regardless of the location, wild swimming and
                        camping provide a chance to escape the hustle and bustle of everyday
                        life and enjoy the beauty of the natural world.</p>
                    <div class="icons-container">
                        <div class="icons">
                            <i class="fas fa-mountains"></i>
                            <span>Mountain Lake</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-tree-large"></i>
                            <span>Forest Lake</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-water"></i>
                            <span>Lake</span>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row row-revarse">
                <div class="image">
                    <img src="images/information-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>local attractions</h3>
                    <p>In addition to the natural beauty of wild swimming and camping locations,
                        there are often many local attractions to explore. For example, in the UK,
                        camping and wild swimming enthusiasts may also visit nearby historical sites
                        or quaint villages. In other parts of the world, there may be opportunities
                        to explore local markets, try regional cuisine, or hike through stunning
                        landscapes. Whether it's exploring the local culture or simply enjoying the
                        natural surroundings, there are many ways to make the most of a wild swimming
                        and camping trip.</p>
                    <div class="icons-container">
                        <div class="icons">
                            <i class="fas fa-hiking"></i>
                            <span>Adventure</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-tint"></i>
                            <span>Waterfall</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-shopping-bag"></i>
                            <span>local Shopping</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section Ends -->
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