<?php
session_start();
require 'connect.php';

if (isset($_POST['id'])) {
    $itemId = $_POST['id'];
    $query = "DELETE FROM `basket` WHERE `id` = '$itemId'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo 'Item removed from the cart successfully.';
    } else {
        echo 'Failed to remove item from the cart.';
    }
}
?>