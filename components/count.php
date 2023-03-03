<?php

// function count_visitor(){
//     include 'components/config.php';
//     session_start();
//     if (isset($_SESSION['count'])) {
//         $visitor_counter_add = $conn->prepare("UPDATE visitor_counter SET counter = counter+1 WHERE id = 1;");
//         $visitor_counter_add->execute();
//     } else {
//         $_SESSION['count'] = 0;
//     }
// }

function count_visitor(){
    include 'components/config.php';
    $visitor_counter_add = $conn->prepare("UPDATE visitor_counter SET counter = counter+1 WHERE id = 1;");
    $visitor_counter_add->execute();
}

?>