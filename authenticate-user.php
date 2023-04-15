<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["email"])) {
    header('location: my-account.php?email=' . urlencode($_SESSION["email"]));
    exit;
}
?>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header('location: my-account.php?email=' . urlencode($email));
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>