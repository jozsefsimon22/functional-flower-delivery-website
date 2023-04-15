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
    <link rel="stylesheet" href="Style/about-us.css">

    <title>About Us</title>

</head>

<body>
    <!-- Header -->
    <?php require 'header.php'; ?>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>

    <!-- Main Body -->
    <div class="row mission-statement">
        <div class="col-3"></div>
        <div class="col-6">
            <h1>Mission Statement</h1>
            <p><i>Our mission is to provide a seamless flower delivery experience that delights our customers from
                    start to finish. From browsing our beautiful arrangements to placing an order, tracking
                    deliveries, and receiving timely notifications, we strive to make every step of the process
                    effortless and enjoyable, creating unforgettable moments.</i></p>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row main-body">
        <div class="col-3">
            <img src="Photos/Decoration/left.png" alt="left-flower" class="side-image-left">
        </div>
        <div class="col-6">
            <h1>About Us</h1>
            <p>Welcome to our flower delivery service in Edinburgh! We are a team of passionate florists dedicated
                to providing the highest quality floral arrangements to our customers.
            </p>
            <br>
            <p>
                <img src="Photos/Team/team1.jpg" alt="team" id="img-1">
                Our journey began with a simple goal: to spread joy and happiness through the beauty of flowers. We
                believe that flowers have the power to brighten up any space, and we want to help our customers
                bring that joy into their homes and the lives of their loved ones.
            </p>
            <br>
            <p>
                Our team is made up of experienced and talented florists who take pride in their work. We carefully
                select only the freshest and most beautiful flowers, and create unique and stunning arrangements for
                any occasion. Whether you need a bouquet for a special occasion, a gift for a loved one, or simply
                want to brighten up your own space, we have the perfect arrangement for you.
            </p>
            <br>
            <p>
                At our flower delivery service in Edinburgh, we understand the importance of customer satisfaction.
                That's why we strive to provide exceptional customer service every step of the way. From the moment
                you place your order, to the moment your flowers are delivered, we are dedicated to making your
                experience with us a positive one.
            </p>
            <br>
            <p></p>
            <img src="Photos/Team/team2.jpg" alt="team" id="img-2">
            We take pride in being a local business in Edinburgh and are committed to supporting our community.
            We source our flowers from local growers whenever possible, and we strive to be an environmentally
            conscious business by minimising our waste and carbon footprint.
            </p>
            <br>
            <p>
                Thank you for choosing our flower delivery service in Edinburgh. We look forward to spreading joy
                and happiness with our beautiful floral arrangements.
            </p>
        </div>
        <div class="col-3">
            <img src="Photos/Decoration/right.png" alt="right-flower" class="side-image-right">
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