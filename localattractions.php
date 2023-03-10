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
    <!-- header section starts  -->
    <?php include 'components/header.php'; ?>
    <!-- header section ends -->

    <!-- local attrection section start -->
    <section>
        <div class="local-atr">
            <h3 class="sub-heading">Explore your campaign</h3>
            <h1 class="heading">Local Attractions</h1>
            <div class="local-container">
                <div class="local-con-internal">
                    <h1>Wild Lake</h1>
                    <img src="images/local-1.jpg" alt="">
                    <p>
                        Wild lakes offer a unique experience for swimming and camping enthusiasts. These natural bodies of water are often tucked away in remote locations, surrounded by lush forests and breathtaking landscapes. They provide a tranquil and serene atmosphere, perfect for those seeking to escape the hustle and bustle of city life.
                        Swimming in a wild lake offers a refreshing break from the heat of summer. The cool, clear water is perfect for a leisurely swim or a quick dip to cool off. Camping by a wild lake provides an opportunity to disconnect from technology and reconnect with nature. Many campgrounds offer a variety of amenities such as fire pits, picnic tables, and hiking trails.
                    </p>
                </div>
                <div class="local-con-internal">
                    <h1>fountain lake</h1>
                    <img src="images/local-2.jpg" alt="">
                    <p>
                        Fountain Lakes is a popular destination for swimming and camping. The two lakes
                        offer crystal-clear waters perfect for swimming and fishing, while the surrounding
                        park offers hiking trails, picnic areas, and playgrounds. The campsite is equipped
                        with electricity and water hookups, as well as modern restroom facilities. Overall,
                        Fountain Lakes is an ideal spot for a relaxing outdoor getaway.
                    </p>
                </div>
                <div class="local-con-internal">
                    <h1>Stone Lake</h1>
                    <img src="images/local-3.jpg" alt="">
                    <p>
                        Soca River, located in Slovenia, is a popular destination for swimming and 
                        camping. The river is renowned for its clear turquoise waters, 
                        which are perfect for swimming, kayaking, and rafting. The surrounding forests
                         and mountains offer ample opportunities for hiking and cycling. 
                         Campsites are available along the river, with facilities such as showers 
                         and toilets. Soca River is a must-visit destination for nature lovers and 
                         adventure seekers.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- local attrection section end -->

    <!-- Footer section start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer section start -->

    <!-- sweetalart cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

    <?php include 'components/alerts.php'; ?>
</body>

</html>