<?php
require 'connect.php';

if (isset($_POST['id'])) {
    $flowerId = $_POST['id'];
    $userId = $_SESSION['email'];

    $update_query = "UPDATE basket SET quantity = quantity + 1 WHERE id = $flowerId";
    $update_result = mysqli_query($connect, $update_query);

    if ($update_result) {
        echo 'Item added to cart successfully.';
    } else {
        echo 'Failed to add item to cart.';
    }
}
?>