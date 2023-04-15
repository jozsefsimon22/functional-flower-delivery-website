<?php
include 'connect.php';
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
    <?php include 'flowers-table.php'; ?>

    <!-- <div class="container main-body">
        <div class="row">
            <div class="col">
                <img src="Photos/Flowers/the_anna.webp" alt="flower">
                <div class="row">
                    <h5>The Anna</h5>
                    <h6>£29.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_becca.webp" alt="flower">
                <div class="row">
                    <h5>The Becca</h5>
                    <h6>£19.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_hallie.webp" alt="flower">
                <div class="row">
                    <h5>The Hallie</h5>
                    <h6>£34.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_helga.webp" alt="flower">
                <div class="row">
                    <h5>The Helga</h5>
                    <h6>£19.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <img src="Photos/Flowers/the_minnie.webp" alt="flower">
                <div class="row">
                    <h5>The Minnie</h5>
                    <h6>£9.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_phoebe.webp" alt="flower">
                <div class="row">
                    <h5>The Phoebe</h5>
                    <h6>£26.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_rue.webp" alt="flower">
                <div class="row">
                    <h5>The Rue</h5>
                    <h6>£29.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <img src="Photos/Flowers/the_yui.webp" alt="flower">
                <div class="row">
                    <h5>The Yui</h5>
                    <h6>£49.99</h6>
                </div>
                <div class="row">
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

    </div> -->


    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>