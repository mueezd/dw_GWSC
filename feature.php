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

    <!-- Features section starts -->
    <section id="feature">
        <div class="features">
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
                    <p>
                        WWild swimming is popular among nature lovers, exercisers, and relaxers. Wild swimming is swimming in rivers, lakes, and seas instead of
                        pools. Wild swimming allows swimmers to appreciate nature and enjoy the scenery.
                    </p>
                    <a href="" class="btn">Read More..</a>
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
                    <p>
                        While wild swimming is primarily a natural and unstructured activity, some entertainment facilities can enhance the experience.
                        These facilities can include floating docks, diving boards, and water slides. A campaign promoting these facilities can increase interest
                        in wild swimming and help create a more enjoyable experience for swimmers.
                    </p>
                    <a href="" class="btn">Read More..</a>
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
                    <p>
                        Accessible car parking facilities near wild swimming locations are essential to ensure easy access for visitors.
                        Lack of parking can discourage people from visiting and can cause environmental damage due to illegal parking.
                        A campaign to promote car parking facilities can encourage responsible visitation and protect the natural environment.
                    </p>
                    <a href="" class="btn">Read More..</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/f-4.jpg" alt="">
                    <h3>showers</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>
                        Showers are a crucial facility for wild swimming as they provide an opportunity for swimmers to rinse off after swimming in natural bodies of
                        water. This helps to prevent the spread of contaminants and promotes personal hygiene. A campaign promoting shower facilities can encourage
                        responsible swimming and help protect the environment.
                    </p>
                    <a href="" class="btn">Read More..</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/f-5.jpg" alt="">
                    <h3>internet access</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>
                        Internet access facilities may not be a top priority for wild swimming, but they can be helpful for visitors who need to access maps,
                        weather forecasts, or emergency services. A campaign promoting internet access can enhance visitor experience and provide a safer
                        and more informed swimming environment.
                    </p>
                    <a href="" class="btn">Read More..</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section End -->
    <!-- wearable technology categories section start -->
    <aside>
        <div id="sidebar" class="neumorphic">
            <ul class="menu">
                <li>FORM Swim Goggles</li>
                <li>Apple Watch Series 8</li>
                <li>FINIS Smart Swim Goggles</li>
                <li>FitBit Inspire 3</li>
                <li>XMetrics Pro Swim Tracker</li>
            </ul>
            <div id="toggle" class="neumorphic">
                <h1>wearable technology categories</h1>
            </div>
        </div>
    </aside>
    <!-- wearable technology categories section ends -->
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