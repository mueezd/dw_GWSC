<?php

include 'components/config.php';

if(isset($_POST['submit'])){

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ? LIMIT 1");
   $select_user->execute([$user_id]);
   $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   if(!empty($name)){
      $update_name = $conn->prepare("UPDATE `users` SET name = ? WHERE id = ?");
      $update_name->execute([$name, $user_id]);
      $success_msg[] = 'Username updated!';
   }

   if(!empty($email)){
      $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
      $verify_email->execute([$email]);
      if($verify_email->rowCount() > 0){
         $warning_msg[] = 'Email already taken!';
      }else{
         $update_email = $conn->prepare("UPDATE `users` SET email = ? WHERE id = ?");
         $update_email->execute([$email, $user_id]);
         $success_msg[] = 'Email updated!';
      }
   }

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = create_unique_id().'.'.$ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'user_uploaded_files/'.$rename;

  if(!empty($image)){
   if($image_size > 2000000){
      $warning_msg[] = 'Image size is too large!';
   }else{
      $update_image = $conn->prepare("UPDATE `users` SET image = ? WHERE id = ?");
      $update_image->execute([$rename, $user_id]);
      move_uploaded_file($image_tmp_name, $image_folder);
      if($fetch_user['image'] != ''){
         unlink('user_uploaded_files/'.$fetch_user['image']);
      }
      $success_msg[] = 'Image updated!';
   }
  }

  $prev_pass = $fetch_user['password'];

  $old_pass = password_hash($_POST['old_pass'], PASSWORD_DEFAULT);
  $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);

  $empty_old = password_verify('', $old_pass);

  $new_pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);
  $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);

  $empty_new = password_verify('', $new_pass);

  $c_pass = password_verify($_POST['c_pass'], $new_pass);
  $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

  if($empty_old != 1){
      $verify_old_pass = password_verify($_POST['old_pass'], $prev_pass);
      if($verify_old_pass == 1){
         if($c_pass == 1){
            if($empty_new != 1){
               $update_pass = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
               $update_pass->execute([$new_pass, $user_id]);
               $success_msg[] = 'Password updated!';
            }else{
               $warning_msg[] = 'Please enter new password!';
            }
         }else{
            $warning_msg[] = 'Confirm password not matched!';
         }
      }else{
         $warning_msg[] = 'Old password not matched!';
      }
  }
   
}

if(isset($_POST['delete_image'])){

   $select_old_pic = $conn->prepare("SELECT * FROM `users` WHERE id = ? LIMIT 1");
   $select_old_pic->execute([$user_id]);
   $fetch_old_pic = $select_old_pic->fetch(PDO::FETCH_ASSOC);

   if($fetch_old_pic['image'] == ''){
      $warning_msg[] = 'Image already deleted!';
   }else{
      $update_old_pic = $conn->prepare("UPDATE `users` SET image = ? WHERE id = ?");
      $update_old_pic->execute(['', $user_id]);
      if($fetch_old_pic['image'] != ''){
         unlink('user_uploaded_files/'.$fetch_old_pic['image']);
      }
      $success_msg[] = 'Image deleted!';
   }

}

?>