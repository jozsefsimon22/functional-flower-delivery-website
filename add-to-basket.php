<?php
session_start();
require 'connect.php';

if (isset($_POST['id'])) {
    $flowerId = $_POST['id'];
    $check_query = "SELECT id, quantity FROM basket WHERE flower_id = $flowerId";

    // Check if the flower is already in the basket
    $check_result = mysqli_query($connect, $check_query);
    $row = mysqli_fetch_assoc($check_result);

    if ($row) {
        // The flower is already in the basket, update the quantity
        $basketItemId = $row['id'];
        $newQuantity = $row['quantity'] + 1;
        $update_query = "UPDATE basket SET quantity = $newQuantity WHERE id = $basketItemId";
    } else {
        // The flower is not in the basket, insert it with a quantity of 1
        $update_query = "INSERT INTO basket (flower_id, quantity, user_id) VALUES ($flowerId, 1, '{$_SESSION['email']}')";
    }

    $update_result = mysqli_query($connect, $update_query);
}
?>