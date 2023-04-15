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
    <link rel="stylesheet" href="Style/checkout.css">
    <link rel="stylesheet" href="Style/footer.css">

    <title>Checkout</title>

</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php require 'header.php'; ?>

        <!-- Navbar -->
        <?php require 'navbar.php'; ?>

        <!-- Main Body -->
        <div class="row checkout-main-body">
            <div class="col delivery-details">
                <div class="inner">
                    <h3>Shipping Details</h3>
                    <form action="#">
                        <div class="data">
                            <div class="row">
                                <div class="col-6"><label for="name">Email</label>
                                    <input type="text" id="name" required>
                                </div>
                                <div class="col-6"><label for="phone-number">Phone Number</label>
                                    <input type="text" id="phone-number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"><label for="first-name">First Name</label>
                                    <input type="text" id="name" required>
                                </div>
                                <div class="col-6"><label for="last-name">Last Name</label>
                                    <input type="text" id="phone-number">
                                </div>
                            </div>
                            <h4>
                                Delivery Address
                            </h4>
                            <div class="row">
                                <div class="col">
                                    <label for="street">Street</label>
                                    <input type="text" id="street">
                                </div>
                                <div class="col">
                                    <label for="city">City</label>
                                    <input type="text" id="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="country">Country</label>
                                    <input type="text" id="country">
                                </div>
                                <div class="col">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" id="postcode">
                                </div>
                            </div>
                        </div>
                        <div class="row checkout-btn">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <button>Checkout</button>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col basket-list">
                <div class="inner">
                    <h3>Order Summary</h3>
                    <div class="data">
                        <table>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Photos/Flowers/the_anna.webp" alt="flower">
                                </td>
                                <td>The Anna</td>
                                <td>1</td>
                                <td>£29.99</td>
                                <td>£29.99</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Photos/Flowers/the_becca.webp" alt="flower">
                                </td>
                                <td>The Becca</td>
                                <td>2</td>
                                <td>£19.99</td>
                                <td>£39.98</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="Photos/Flowers/the_hallie.webp" alt="flower">
                                </td>
                                <td>The Hallie</td>
                                <td>1</td>
                                <td>£34.99</td>
                                <td>£34.99</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-4 total-summary">
                                <h5>Sub-Total</h5>
                                <h5>Delivery</h5>
                                <h5>VAT</h5>
                                <h5>Total</h5>
                            </div>
                            <div class="col-4 total-summary">
                                <h5>£104.96</h5>
                                <h5>£20.00</h5>
                                <h5>£24.99</h5>
                                <h5>£149.95</h5>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>

                </div>
            </div>

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
                    <li class="me-3"><a href="https://www.instagram.com/"><img src="Icons/ig-icon.png"
                                alt="instagram icon" class="footer-icon"></a>instagram
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