<?php
// If new user then add user to database
if (isset($_POST['register'])) {
    // Reset all variables
    $email = '';
    $password = '';
    $firstName = '';
    $lastName = '';
    $phoneNumber = '';
    $street = '';
    $city = '';
    $country = '';
    $postcode = '';


    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (!empty($_POST['first_name'])) {
        $firstName = $_POST['first_name'];
    }
    if (!empty($_POST['last_name'])) {
        $lastName = $_POST['last_name'];
    }
    if (!empty($_POST['phone'])) {
        $phoneNumber = $_POST['phone'];
    }
    if (!empty($_POST['street'])) {
        $street = $_POST['street'];
    }
    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
    }
    if (!empty($_POST['country'])) {
        $country = $_POST['country'];
    }
    if (!empty($_POST['postcode'])) {
        $postcode = $_POST['postcode'];
    }

    $query = "insert into users (email, password, firstName, lastName, phoneNumber, street, city, country, postcode) values('$email', '$password', '$firstName', '$lastName', '$phoneNumber', '$street', '$city', '$country', '$postcode')";

    mysqli_query($connect, $query);
}

?>