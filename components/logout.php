<?php
// @include 'config.php';
// session_start();
// session_unset();
// session_destroy();
// header('location:../login.php');

include 'config.php';
setcookie('user_id', '', time() - 1, '/');
header('location:../index.php');
?>


