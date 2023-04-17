<div class="container main-body">
    <?php
    // make the query
    $query = "select * from flowers";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result); // number of flowers
    
    // If there are no flowers, add them to the database and display them for demonstration purposes
    if ($num == 0) {
        $insert_data_query = "
        INSERT INTO flowers (name, price, image_url) VALUES ('The Anna', 29.99, 'Photos/Flowers/the_anna.webp'),
        ('The Becca', 19.99, 'Photos/Flowers/the_becca.webp'),
        ('The Hallie', 34.99, 'Photos/Flowers/the_hallie.webp'),
        ('The Helga', 19.99, 'Photos/Flowers/the_helga.webp'),
        ('The Minnie', 9.99, 'Photos/Flowers/the_minnie.webp'),
        ('The Phoebe', 26.99, 'Photos/Flowers/the_phoebe.webp'),
        ('The Rue', 29.99, 'Photos/Flowers/the_rue.webp'),
        ('The Yui', 49.99, 'Photos/Flowers/the_yui.webp')
        ";
        mysqli_query($connect, $insert_data_query);
    }

    // Display the flowers in a grid
    if ($num > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count % 4 == 0) {
                echo "<div class='row'>";
            }

            echo "<div class='col'>
                <img src=\"" . $row['image_url'] . "\" alt='flower'>
                <div class='row'>
                    <h5>" . $row['name'] . "</h5>
                    <h6>£" . $row['price'] . "</h6>
                </div>
                <div class='row'>
                    <button id=" . $row['id'] . " class='add-to-cart'>Add to Cart</button>
                </div>
            </div>";

            $count++;

            if ($count % 4 == 0) {
                echo "</div>";
            }
        }

        // If the last row doesn't have 4 columns, close the row anyway
        if ($count % 4 != 0) {
            echo "</div>";
        }

        echo "</div>";
    }