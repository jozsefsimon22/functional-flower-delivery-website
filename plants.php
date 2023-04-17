<?php
include 'connect.php';
?>

<?php
include 'create-plants-table.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="call-add-to-basket.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thistle & Bloom Edinburgh</title>

    <link rel="stylesheet" href="Style/flowers.css">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/header.css">

</head>

<body>
    <!-- Header -->
    <?php require 'header.php'; ?>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>

    <!-- Main Body New -->
    <?php include 'plants-table.php'; ?>


    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>