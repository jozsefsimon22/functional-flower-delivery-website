<?php
// connect to the database
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

    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/footer.css">

    <title>Thistle & Bloom Edinburgh</title>

</head>

<body>
    <!-- Header -->
    <?php require 'header.php'; ?>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Main Body -->
    <div class="row">
        <img src="Photos\main_lg.png" alt="homePagePhoto" class="img-fluid">
    </div>


    <!-- Footer -->
    <div class="row footer">
        <hr>
        <div class="col-md-6">
            <h5>Contact Us</h5>
            <p>123 Main St.<br>Edinburgh EH8 9AB<br>Phone: 555-555-5555<br>Email: <a
                    href="mailto:contactus@thistlebloomedinburgh.com">contactus@thistlebloomedinburgh.com</a>
            </p>
        </div>
        <div class="col-md-6">
            <h5>Follow Us</h5>
            <ul class="list-unstyled flex-column">
                <li class="me-3"><a href="https://www.facebook.com/"></i><img src="Icons/fb_icon.png"
                            alt="facebook icon" class="footer-icon"></a>facebook
                </li>
                <li class="me-3"><a href="https://twitter.com/"><img src="Icons/tw-icon.png" alt="twitter icon"
                            class="footer-icon"></a>twitter</li>
                <li class="me-3"><a href="https://www.instagram.com/"><img src="Icons/ig-icon.png" alt="instagram icon"
                            class="footer-icon"></a>instagram
                </li>
            </ul>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>