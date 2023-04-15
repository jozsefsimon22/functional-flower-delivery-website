<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="Style/my-account.css">

    <title>My Account</title>
</head>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<body>
    <!-- My Account -->
    <div class="my-account-body">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-3">
                    <img src="Photos/Decoration/left.png" alt="left-flower" class="side-image-left">
                </div>
                <div class="col-6">
                    <h1>My Account</h1>
                    <p>
                        <?php
                        $email = $_GET['email'];
                        $query = "SELECT * FROM users WHERE email = '$email'";
                        $result = mysqli_query($connect, $query);

                        $row = mysqli_fetch_assoc($result);

                        echo "First Name: $row[firstName]" . "<br/>";
                        echo "Last Name: $row[lastName]" . "<br/>";
                        echo "<h2>Address</h2>" . "<br/>";
                        echo "Street: $row[street]" . "<br/>";
                        echo "City: $row[city]" . "<br/>";
                        echo "Postcode: $row[postcode]" . "<br/>";
                        echo "Country: $row[country]" . "<br/>";
                        echo "Phone Number: $row[phoneNumber]" . "<br/>";
                        ?>
                        <a href="logout.php" id="logout_button" class="btn btn-danger">Log Out</a>
                    </p>
                </div>
                <div class="col-3">
                    <img src="Photos/Decoration/right.png" alt="right-flower" class="side-image-right">
                </div>
            </div>
        </div>
    </div>


</body>

<?php include 'footer.php'; ?>

</html>