<?php

include 'components/config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('location:booked.php');
}

if (isset($_POST['cancel'])) {

    $update_confirm_booking = $conn->prepare("UPDATE `confirm_booking` SET status = ? WHERE id = ?");
    $update_confirm_booking->execute(['canceled', $get_id]);
    header('location:booked.php');
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

 <!-- view booked item section start  -->
 <section>
        <div class="booked-details">
            <h1 class="heading">order details</h1>
            <div class="box-container">
                <?php
                $grand_total = 0;
                $select_confirm_booking = $conn->prepare("SELECT * FROM `confirm_booking` WHERE id = ? LIMIT 1");
                $select_confirm_booking->execute([$get_id]);
                if ($select_confirm_booking->rowCount() > 0) {
                    while ($fetch_order = $select_confirm_booking->fetch(PDO::FETCH_ASSOC)) {
                        $select_pitch = $conn->prepare("SELECT * FROM `pitch` WHERE id = ? LIMIT 1");
                        $select_pitch->execute([$fetch_order['pitch_id']]);
                        if ($select_pitch->rowCount() > 0) {
                            while ($fetch_pitch = $select_pitch->fetch(PDO::FETCH_ASSOC)) {
                                $sub_total = ($fetch_order['price'] * $fetch_order['qty']);
                                $grand_total += $sub_total;
                ?>
                                <div class="box">
                                    <div class="col">
                                        <p class="title"><i class="fas fa-calendar"></i><?= $fetch_order['date']; ?></p>
                                        <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image" alt="">
                                        <p class="price"><i class="fas fa-pound-sign"></i> <?= $fetch_order['price']; ?> x <?= $fetch_order['qty']; ?></p>
                                        <h3 class="name"><?= $fetch_pitch['name']; ?></h3>
                                        <p class="grand-total">grand total : <span><i class="fas fa-indian-rupee-sign"></i> <?= $grand_total; ?></span></p>
                                    </div>
                                    <div class="col">
                                        <p class="title">billing address</p>
                                        <p class="user"><i class="fas fa-user"></i><?= $fetch_order['name']; ?></p>
                                        <p class="user"><i class="fas fa-phone"></i><?= $fetch_order['number']; ?></p>
                                        <p class="user"><i class="fas fa-envelope"></i><?= $fetch_order['email']; ?></p>
                                        <p class="user"><i class="fas fa-map-marker-alt"></i><?= $fetch_order['address']; ?></p>
                                        <p class="title">status</p>
                                        <p class="status" style="color:<?php if ($fetch_order['status'] == 'delivered') {
                                                                            echo 'green';
                                                                        } elseif ($fetch_order['status'] == 'canceled') {
                                                                            echo 'red';
                                                                        } else {
                                                                            echo 'orange';
                                                                        }; ?>"><?= $fetch_order['status']; ?></p>
                                        <?php if ($fetch_order['status'] == 'canceled') { ?>
                                            <a href="confirm_booking.php?get_id=<?= $fetch_pitch['id']; ?>" class="btn">order again</a>
                                        <?php } else { ?>
                                            <form action="" method="POST">
                                                <input type="submit" value="cancel order" name="cancel" class="delete-btn" onclick="return confirm('cancel this order?');">
                                            </form>
                                        <?php } ?>
                                    </div>
                                </div>
                <?php
                            }
                        } else {
                            echo '<p class="empty">pitch not found!</p>';
                        }
                    }
                } else {
                    echo '<p class="empty">no Booking found!</p>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- view booked item section end  -->

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