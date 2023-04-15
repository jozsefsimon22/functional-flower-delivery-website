<div class="container main-body">
    <?php
    // make the query
    $query = "select * from flowers";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result); // number of flowers
    
    // We only display the table if there is data to display.
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo ("<div class='row'></div>
        <div class='col'>
            <img src=\"" . $row['image-url'] . "\" alt='flower'>
            <div class='row'>
                <h5>" . $row['name'] . "</h5>
                <h6>£" . $row['price'] . "</h6>
            </div>
            <div class='row'>
                <button>Add to Cart</button>
            </div>
        </div>"
            );
        }
    }
    ?>
</div>