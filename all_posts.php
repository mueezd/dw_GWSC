<?php
include 'components/config.php';
$title = "Review Posts";
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
    <!-- Customer CSS fie link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- search form -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- header section start -->
    <section>
        <?php include 'components/header.php'; ?>
    </section>
    <!-- header section end -->

    <!-- all posts section start -->
    <section class="all-posts">
        <h1 class="heading">Reviews</h1>
        <div class="box-container">
            <?php
            $select_posts = $conn->prepare("SELECT * FROM `posts`");
            $select_posts->execute();
            if ($select_posts->rowCount() > 0) {
                while ($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)) {

                    $post_id = $fetch_post['id'];
                
                    $count_reviews = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ?");
                    $count_reviews->execute([$post_id]);
                    $total_reviews = $count_reviews->rowCount();}
                }
            ?>
        <div class="box">
                    <img src="user_uploaded_files/<?= $fetch_post['image'];?>" alt="" class="image">
        </div>
            <?php
        //   if(){ 
        // } else {
        //     echo '<p class="empty">no post added yet!</p>';
        // }



            ?>
        </div>
    </section>
    <!-- all posts section end -->

    
    <!-- Chat section start -->
    <?php include 'components/chat.php'; ?>
    <!-- Chat section end -->
    
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