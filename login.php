<?php
// connect to the database
include 'connect.php';
?>

<?php
include "authenticate-user.php";
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
    <link rel="stylesheet" href="Style/login.css">

    <title>Thistle & Bloom Edinburgh</title>

</head>

<!-- Header -->
<?php require 'header.php'; ?>

<!-- Navbar -->
<?php require 'navbar.php'; ?>

<body>
    <!-- Login Form -->
    <div class="login-form">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-3">
                    <img src="Photos/Decoration/left.png" alt="left-flower" class="side-image-left">
                </div>
                <div class="col-6">
                    <h1>Login</h1>
                    <form action="login.php" method="post">
                        <div class="input-with-icon">
                            <input type="text" name="email" placeholder="Email" id="email" required>
                        </div>

                        <div class="input-with-icon">
                            <input type="password" name="password" placeholder="Password" id="password" required>
                        </div>

                        <input type="submit" value="Login" id="login_button" name="login">
                    </form>
                    <p id="register">Don't have an account? <a href="register.php">Register</a></p>
                </div>
                <div class="col-3">
                    <img src="Photos/Decoration/right.png" alt="right-flower" class="side-image-right">
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>