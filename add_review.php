<?php

include 'components/config.php';
$title = "Add Review";
if (isset($_GET['get_id'])) {
   $get_id = $_GET['get_id'];
} else {
   $get_id = '';
   header('location:all_posts.php');
}

if (isset($_POST['submit'])) {

   if ($user_id != '') {

      $id = create_unique_id();
      $title = $_POST['title'];
      $title = filter_var($title, FILTER_SANITIZE_STRING);
      $description = $_POST['description'];
      $description = filter_var($description, FILTER_SANITIZE_STRING);
      $rating = $_POST['rating'];
      $rating = filter_var($rating, FILTER_SANITIZE_STRING);

      $verify_review = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ? AND user_id = ?");
      $verify_review->execute([$get_id, $user_id]);

      if ($verify_review->rowCount() > 0) {
         $warning_msg[] = 'Your review already added!';
      } else {
         $add_review = $conn->prepare("INSERT INTO `reviews`(id, post_id, user_id, rating, title, description) VALUES(?,?,?,?,?,?)");
         $add_review->execute([$id, $get_id, $user_id, $rating, $title, $description]);
         $success_msg[] = 'Review added!';
         header("Refresh:1;url=view_review_post.php?get_id=$get_id");
      }
   } else {
      $warning_msg[] = 'Please login first!';
   }
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
   <!-- search form -->
   <form action="" id="search-form">
      <input type="text" placeholder="search here..." name="" id="search-box">
      <label for="search-box" class="fas fa-search" onclick="searchText()"></label>
      <i class="fas fa-times" id="close"></i>
   </form>
   <!-- header section starts  -->
   <?php include 'components/header.php'; ?>
   <!-- header section ends -->

   <!-- add review section starts  -->
   <section class="form-container">
      <form action="" method="post">
         <h3>post your review</h3>
         <p class="placeholder">review title <span>*</span></p>
         <input type="text" name="title" required maxlength="50" placeholder="enter review title" class="box">
         <p class="placeholder">review description</p>
         <textarea name="description" class="box" placeholder="enter review description" maxlength="1000" cols="30" rows="10"></textarea>
         <p class="placeholder">review rating <span>*</span></p>
         <select name="rating" class="box" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select>
         <input type="submit" value="submit review" name="submit" class="form-btn">
         <a href="view_review_post.php?get_id=<?= $get_id; ?>" class="btn2">go back</a>
      </form>
   </section>
   <!-- add review section ends -->

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