<?php

include 'components/config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}


if (isset($_POST['update_cart'])) {

    $cart_id = $_POST['cart_id'];
    $cart_id = filter_var($cart_id, FILTER_SANITIZE_STRING);
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    $update_qty = $conn->prepare("UPDATE `cart` SET qty = ? WHERE id = ?");
    $update_qty->execute([$qty, $cart_id]);

    $success_msg[] = 'Cart quantity updated!';
}

if (isset($_POST['delete_item'])) {

    $cart_id = $_POST['cart_id'];
    $cart_id = filter_var($cart_id, FILTER_SANITIZE_STRING);

    $verify_delete_item = $conn->prepare("SELECT * FROM `booking` WHERE id = ?");
    $verify_delete_item->execute([$cart_id]);

    if ($verify_delete_item->rowCount() > 0) {
        $delete_cart_id = $conn->prepare("DELETE FROM `booking` WHERE id = ?");
        $delete_cart_id->execute([$cart_id]);
        $success_msg[] = 'Booking item deleted!';
    } else {
        $warning_msg[] = 'Booking item already deleted!';
    }
}

if (isset($_POST['empty_cart'])) {

    $verify_empty_cart = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
    $verify_empty_cart->execute([$user_id]);

    if ($verify_empty_cart->rowCount() > 0) {
        $delete_cart_id = $conn->prepare("DELETE FROM `booking` WHERE user_id = ?");
        $delete_cart_id->execute([$user_id]);
        $success_msg[] = 'booking emptied!';
    } else {
        $warning_msg[] = 'booking already emptied!';
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

    <!-- booking cart section start -->



    <section id="booking-cart">
        <div class="booking-cart">
            <h1 class="heading">Booking cart</h1>
            <div class="box-container">
                <?php
                $grand_total = 0;
                $select_cart = $conn->prepare("SELECT * FROM `booking` WHERE user_id = ?");
                $select_cart->execute([$user_id]);
                if ($select_cart->rowCount() > 0) {
                    while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {

                        $select_pitchs = $conn->prepare("SELECT * FROM `pitch` WHERE id = ?");
                        $select_pitchs->execute([$fetch_cart['pitch_id']]);
                        if ($select_pitchs->rowCount() > 0) {
                            $fetch_pitch = $select_pitchs->fetch(PDO::FETCH_ASSOC);

                ?>
                            <form action="" method="POST" class="box">
                                <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
                                <img src="uploaded_files_pitch/<?= $fetch_pitch['image']; ?>" class="image" alt="">
                                <h3 class="name"><?= $fetch_pitch['name']; ?></h3>
                                <p class="price"><i class="fas fa-pound-sign"></i> <?= $fetch_cart['price']; ?></p>
                                <input type="number" name="qty" required min="1" value="<?= $fetch_cart['qty']; ?>" max="99" maxlength="2" class="qty">
                                <button type="submit" name="update_cart" class="fas fa-edit">
                                </button>
                                <p class="sub-total">sub total : <span><i class="fas fa-pound-sign"></i> <?= $sub_total = ($fetch_cart['qty'] * $fetch_cart['price']); ?></span></p>
                                <input type="submit" value="delete" name="delete_item" class="btn-booking-delete" onclick="return confirm('delete this item?');">
                            </form>
                <?php
                            $grand_total += $sub_total;
                        } else {
                            echo '<p class="empty">pitch was not found!</p>';
                        }
                    }
                } else {
                    echo '<p class="empty">your cart is empty!</p>';
                }
                ?>
            </div>
            <div>
                <?php if ($grand_total != 0) { ?>
                    <div class="cart-total">
                        <p>grand total : <span><i class="fas fa-pound-sign"></i> <?= $grand_total; ?></span></p>
                        <div class="cart-total-btn-sec">
                            <form action="" method="POST">
                                <input type="submit" value="empty cart" name="empty_cart" class="delete-btn" onclick="return confirm('empty your cart?');">
                            </form>
                            <a href="checkout.php" class="btn">proceed to checkout</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </section>
    <!-- booking cart section end -->

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