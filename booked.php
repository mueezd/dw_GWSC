<?php

include 'components/config.php';
$title = "Booked";
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

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

    <!-- booked section start -->
    <section>
        <div class="booked">
            <h3 class="sub-heading">Booking Confirmation</h3>
            <h1 class="heading">my booked items</h1>
            <div class="box-container">
                <?php
                $select_orders = $conn->prepare("SELECT * FROM `confirm_booking` WHERE user_id = ? ORDER BY date DESC");
                $select_orders->execute([$user_id]);
                if ($select_orders->rowCount() > 0) {
                    while ($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                        $select_pitch = $conn->prepare("SELECT * FROM `pitch` WHERE id = ?");
                        $select_pitch->execute([$fetch_order['pitch_id']]);
                        if ($select_pitch->rowCount() > 0) {
                            while ($fetch_pitch = $select_pitch->fetch(PDO::FETCH_ASSOC)) {
                ?>
                                <div class="box" <?php if ($fetch_order['status'] == 'canceled') {
                                                        echo 'style="border:.2rem solid red";';
                                                    }; ?>>
                                    <a href="view_booked_items.php?get_id=<?= $fetch_order['id']; ?>">
                                        <p class="date"><i class="fa fa-calendar"></i><span><?= $fetch_order['date']; ?></span></p>
                                        <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image" alt="">
                                        <h3 class="name"><?= $fetch_pitch['name']; ?></h3>
                                        <p class="price"><i class="fas fa-pound-sign"></i> <?= $fetch_order['price']; ?> x <?= $fetch_order['qty']; ?></p>
                                        <p class="status" style="color:<?php if ($fetch_order['status'] == 'delivered') {
                                                                            echo 'green';
                                                                        } elseif ($fetch_order['status'] == 'canceled') {
                                                                            echo 'red';
                                                                        } else {
                                                                            echo 'orange';
                                                                        }; ?>"><?= $fetch_order['status']; ?></p>
                                    </a>
                                    <a href="" class="btn">Pay Now</a>
                                </div>
                <?php
                            }
                        }
                    }
                } else {
                    echo '<p class="empty">no orders found!</p>';
                }
                ?>

            </div>
        </div>
    </section>

    <!-- booked section end -->

    <!-- Footer section start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer section end -->
    
    <!-- Chat section start -->
    <?php include 'components/chat.php'; ?>
    <!-- Chat section end -->

    <!-- Swipper JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- sweetalart cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    <?php include 'components/alerts.php'; ?>

</body>
</html>