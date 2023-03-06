<?php

include 'components/config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

if (isset($_POST['add_to_booking'])) {

    $id = create_unique_id();
    $pitch_id = $_POST['pitch_id'];
    $pitch_id = filter_var($pitch_id, FILTER_SANITIZE_STRING);
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    $verify_booking = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ? AND pitch_id = ?");
    $verify_booking->execute([$user_id, $pitch_id]);

    $max_booking_items = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
    $max_booking_items->execute([$user_id]);

    if ($verify_booking->rowCount() > 0) {
        $warning_msg[] = 'Already added to booking!';
    } elseif ($max_booking_items->rowCount() == 10) {
        $warning_msg[] = 'Cart is full!';
    } else {

        $select_price = $conn->prepare("SELECT * FROM `pitch` WHERE id = ? LIMIT 1");
        $select_price->execute([$pitch_id]);
        $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

        $insert_booking = $conn->prepare("INSERT INTO `booking`(id, user_id, pitch_id, price, qty) VALUES(?,?,?,?,?)");
        $insert_booking->execute([$id, $user_id, $pitch_id, $fetch_price['price'], $qty]);
        $success_msg[] = 'Added to booking!';
    }
}

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

    <!-- search section start  -->
    <section>
        <form method="post" action="" class="p-search">
            <input type="text" name="search_box" placeholder="search here..." class="box">
            <button type="submit" name="search_btn" class="fas fa-search searchButton"></button>
        </form>
    </section>
    <!-- demo search  -->
    <section>
        <div class="availability">
            <?php
             if (isset($_POST['search_box']) or isset($_POST['search_btn'])) {
                echo '<h1 class="heading">Search Result</h1>';
             }
            ?>
            <div class="box-container">
                <?php
                if (isset($_POST['search_box']) or isset($_POST['search_btn'])) {
                    $search_box = $_POST['search_box'];
                    $select_pitch = $conn->prepare("SELECT * FROM `pitch` WHERE name LIKE '%{$search_box}%'");
                    $select_pitch->execute();
                    if ($select_pitch->rowCount() > 0) {
                        while ($fetch_pitch = $select_pitch->fetch(PDO::FETCH_ASSOC)) {
                ?>
                            <form action="" method="POST" class="box">
                                <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image">
                                <a href="#" class="fas fa-heart"></a>
                                <div class="contect">
                                    <h3><?= $fetch_pitch['name'] ?></h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                                    <input type="hidden" name="pitch_id" value="<?= $fetch_pitch['id']; ?>">
                                    <div class="flex-box">
                                        <p class="price"><i class="fas fa-pound-sign"></i><?= $fetch_pitch['price'] ?></p>
                                        <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty">
                                    </div>
                                    <input type="submit" name="add_to_booking" value="add to Book" class="btn">
                                </div>
                            </form>
                <?php
                        }
                    } else {
                        echo '<p class="empty">no pitch Found yet!</p>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- search section end  -->

    <!-- pitch type section start -->
    <section id="availability">
        <div class="availability">
            <h3 class="sub-heading">Book Now</h3>
            <h1 class="heading">Pitch Type & Availability</h1>
            <div class="box-container">
                <?php
                $select_pitch = $conn->prepare("SELECT * FROM `pitch`");
                $select_pitch->execute();
                if ($select_pitch->rowCount() > 0) {
                    while ($fetch_pitch = $select_pitch->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <form action="" method="POST" class="box">
                            <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image" alt="">
                            <a href="#" class="fas fa-heart"></a>
                            <div class="contect">
                                <h3><?= $fetch_pitch['name'] ?></h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolores!</p>
                                <input type="hidden" name="pitch_id" value="<?= $fetch_pitch['id']; ?>">
                                <div class="flex-box">
                                    <p class="price"><i class="fas fa-pound-sign"></i><?= $fetch_pitch['price'] ?></p>
                                    <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty">
                                </div>
                                <input type="submit" name="add_to_booking" value="add to Book" class="btn">
                            </div>
                        </form>
                <?php
                    }
                } else {
                    echo '<p class="empty">no pitch found!</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- pitch type section Ends -->

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