<?php
session_start();
include 'connect.php';
include 'create-basket-table.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/checkout.css">
    <link rel="stylesheet" href="Style/footer.css">

    <title>Checkout</title>

</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php require 'header.php'; ?>

        <!-- Navbar -->
        <?php require 'navbar.php'; ?>

        <!-- Main Body -->
        <div class="row checkout-main-body">
            <div class="col delivery-details">
                <div class="inner">
                    <h3>Shipping Details</h3>
                    <?php include 'shipping-details.html' ?>
                    <div class="col basket-list">
                        <div class="inner">
                            <h3>Order Summary</h3>
                            <?php include 'order-summary-table.php'; ?>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <?php include 'footer.php'; ?>

                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                    crossorigin="anonymous"></script>


</body>

</html>