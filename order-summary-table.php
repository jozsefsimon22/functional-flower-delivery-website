<div class="data">
    <?php
    // check if session is set
    if (!isset($_SESSION['email'])) {
        echo "<p><big>You are not logged in</big></p>";
        echo "<p><big>Please <a href='login.php'>login</a> to view your basket</big></p>";
        exit();
    }

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = "select * from basket where user_id = '$email'";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result); // number of items in basket table for user id in session 
    
        if ($num == 0) {
            echo "<p><big>There are currently no items in your basket</big></p>";
        } else {
            echo "<p><big>There are currently $num items in your basket</big></p>";
            echo '<table>
            <tr>
                <td><b>Product:</b></td>
                <td><b>Quantity:</b></td>
                <td><b>Price:</b></td>
                <td><b>Total:</b></td>
            </tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>$row[product]</td>
                <td>$row[quantity]</td>
                <td>$row[price]</td>
                <td>$row[total]</td>
            </tr>";
            }
            echo '</table>';
            mysqli_free_result($result);
        }
    }
    ?>
</div>
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