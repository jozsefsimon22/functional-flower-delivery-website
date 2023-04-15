<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Style/login.css">
</head>

<body>
    <!-- Header -->
    <?php require 'header.php'; ?>

    <!-- Navigation -->
    <?php require 'navbar.php'; ?>

    <!-- Login -->
    <div class="center">
        <div class="container">
            <a class="close-btn" href="index-home.php">X</a>
            <form action="#">
                <div class="row">
                    <h1>Login</h1>
                </div>
                <div class="row">
                    <label for="emmail">Email</label>
                    <input type="text" id="email">
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password">
                </div>
            </form>
            <div class="row">
                <button>Login</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</html>