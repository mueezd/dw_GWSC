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

    <!-- view all posts section starts  -->
    <section>
        <div class="all-posts">
            <div class="heading">
                <h1>All Reviews</h1>
            </div>
            <div class="box-container">
                <?php
                $select_posts = $conn->prepare("SELECT * FROM `posts`");
                $select_posts->execute();
                if ($select_posts->rowCount() > 0) {
                    while ($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)) {

                        $post_id = $fetch_post['id'];

                        $count_reviews = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ?");
                        $count_reviews->execute([$post_id]);
                        $total_reviews = $count_reviews->rowCount();
                ?>
                        <div class="box">
                            <img src="uploaded_files_posts/<?= $fetch_post['image']; ?>" alt="" class="image">
                            <h3 class="title"><?= $fetch_post['title']; ?></h3>
                            <p class="total-reviews"><i class="fas fa-star"></i> <span><?= $total_reviews; ?></span></p>
                            <a href="view_review_post.php?get_id=<?= $post_id; ?>" class="btn">view post</a>
                        </div>
                <?php
                    }
                } else {
                    echo '<p class="empty">no posts added yet!</p>';
                }
                ?>
            </div>
    </section>
    </div>


    <!-- view all posts section ends -->

    <!-- review section start -->
    <section class="review" id="review">
        <h3 class="sub-heading">Customer's Review</h3>
        <h1 class="heading">What thay say</h1>

        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/user-1.webp" alt="">
                        <div class="user-info">
                            <h3>John Mark</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Laudantium quaerat minus dolore natus asperiores possimus,
                        error qui repudiandae reiciendis blanditiis rerum corporis
                        aspernatur sapiente culpa, consequuntur, eaque nulla. Eos, voluptatibus?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/user-2.jpeg" alt="">
                        <div class="user-info">
                            <h3>John Mark</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Laudantium quaerat minus dolore natus asperiores possimus,
                        error qui repudiandae reiciendis blanditiis rerum corporis
                        aspernatur sapiente culpa, consequuntur, eaque nulla. Eos, voluptatibus?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/user-3.avif" alt="">
                        <div class="user-info">
                            <h3>John Mark</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Laudantium quaerat minus dolore natus asperiores possimus,
                        error qui repudiandae reiciendis blanditiis rerum corporis
                        aspernatur sapiente culpa, consequuntur, eaque nulla. Eos, voluptatibus?</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/user-4.jpg" alt="">
                        <div class="user-info">
                            <h3>John Mark</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Laudantium quaerat minus dolore natus asperiores possimus,
                        error qui repudiandae reiciendis blanditiis rerum corporis
                        aspernatur sapiente culpa, consequuntur, eaque nulla. Eos, voluptatibus?</p>
                </div>
            </div>
        </div>

    </section>
    <!-- review section Ends -->


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