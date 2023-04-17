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
        $query = "SELECT basket.id, name, quantity, price, SUM(quantity * price) AS total FROM `basket` JOIN flowers ON basket.flower_id = flowers.id WHERE `user_id` = '$email' GROUP BY basket.flower_id";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result); // number of items in basket table for user id in session 
    
        $queryTotal = "SELECT SUM(quantity * price) AS total FROM `basket` JOIN flowers ON basket.flower_id = flowers.id WHERE `user_id` = '$email'";
        $resultTotal = mysqli_query($connect, $queryTotal);
        $numTotal = mysqli_num_rows($resultTotal); // number of items in basket table for user id in session 
        $rowTotal = mysqli_fetch_assoc($resultTotal);
        $deliveryFee = 20.00;
        $vat = ($rowTotal['total'] + $deliveryFee) * 0.2;
        $total = $rowTotal['total'] + $deliveryFee + $vat;

        // Format the values to display 2 decimal places
        $formattedDeliveryFee = number_format($deliveryFee, 2);
        $formattedVat = number_format($vat, 2);
        $formattedTotal = number_format($total, 2);

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
                <td></td>
            </tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr id='item-row-$row[id]'>
                <td>$row[name]</td>
                <td>$row[quantity]</td>
                <td>$row[price]</td>
                <td>$row[total]</td>
                <td>
                    <button class='btn btn-danger' data-id='$row[id]' onclick=\"window.location.href='checkout.php?removeID=$row[id]'\">Remove</button>
                </td>
            </tr>";
            }
            echo '</table>';
            mysqli_free_result($result);

            echo "
            </div>
            <div class='row text-left'>
            <div class='col-6'></div>
            <div class='col-3 total-summary'>
            <h5>Sub-Total</h5>
            <h5>Delivery</h5>
            <h5>VAT @ 20%</h5>
            <h5>Total</h5>
            </div>
            <div class='col-3 total-summary'>
            <h5>£$rowTotal[total]</h5>
            <h5>£$formattedDeliveryFee</h5>
            <h5>£$formattedVat</h5>
            <h5>£$formattedTotal</h5>
            </div>
            </div>
            </div>";

            if (isset($_GET['removeID'])) {
                $removeID = $_GET['removeID'];
                $query = "DELETE FROM `basket` WHERE `id` = '$removeID'";
                $result = mysqli_query($connect, $query);
            }
        }

    }
    ?>