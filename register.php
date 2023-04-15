<?php
// connect to the database
include 'connect.php';
?>

<?php
include 'process-new-user-form.php';
?>

<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
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
    <link rel="stylesheet" href="Style/register.css">

    <title>Thistle & Bloom Edinburgh</title>

</head>

<body>
    <!-- Header -->
    <?php require 'header.php'; ?>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>


    <!-- Register Form -->
    <div class="register-form" id="test">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-3">
                    <img src="Photos/Decoration/left.png" alt="left-flower" class="side-image-left">
                </div>
                <div class="col-6">
                    <h1>Register</h1>
                    <form name='registration' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                        onsubmit="return checkPasswordMatches()">
                        <input type=" email" name="email" placeholder="Email Address" id="email" required>
                        <input type="password" name="password" placeholder="Password" id="password" minlength="5"
                            required>
                        <p id="password_info">Minimum 5 character</p>
                        <input type="password" name="password_two" placeholder="Repeat Password" id="password_two"
                            minlength="5" onchange="checkPasswordMatches()" required>
                        <p id="password_error"></p>
                        <h2>Personal Details</h2>
                        <input type="text" name="first_name" placeholder="First Name" id="first_name" required>
                        <input type="text" name="last_name" placeholder="Last Name" id="last_name" required>
                        <input type="tel" name="phone" placeholder="Phone Number" id="phone" required>
                        <h2>Address</h2>
                        <input type="street" name="street" placeholder="Street" id="street">
                        <input type="city" name="city" placeholder="City" id="city">
                        <input type="country" name="country" placeholder="Country" id="country" autocomplete="country">
                        <input type="postcode" name="postcode" placeholder="Postcode" id="postcode">
                        <input type="submit" value="Register" id="register_button" name="register">
                    </form>
                    <p id="register">Already have an account? <a href="login.php">Login</a></p>
                </div>
                <div class="col-3">
                    <img src="Photos/Decoration/right.png" alt="right-flower" class="side-image-right">
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="register-script.js"></script>

</body>

</html>