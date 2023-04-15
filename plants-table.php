<div class="container main-body">
    <?php
    // make the query
    $query = "select * from plants";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result); // number of plants
    
    // If there are no plants, add them to the database and display them for demonstration purposes
    if ($num == 0) {
        $insert_plants_data_query = "
        INSERT INTO plants (name, price, image_url) VALUES
        ('Cat Planter', 14.99, 'Photos/Plants/Cat Planter.jpg'),
        ('Coffee Plant in Ceramic Pot', 24.99, 'Photos/Plants/Coffee Plant in Ceramic Pot.jpg'),
        ('Mother\'s Day Yellow Rose', 19.99, 'Photos/Plants/Mother\'s Day Yellow Rose.jpg'),
        ('Peace Lily Plant', 29.99, 'Photos/Plants/Peace Lily Plant.jpg'),
        ('Pink Azalea in Jute Pot', 34.99, 'Photos/Plants/Pink Azalea in Jute Pot.jpg'),
        ('Pink Rose in Floral Pot', 39.99, 'Photos/Plants/Pink Rose in Floral Pot.jpg'),
        ('Pink Rose in Grey Ceramic Pot', 44.99, 'Photos/Plants/Pink Rose in Grey Ceramic Pot.jpg'),
        ('White Azalea in Two Tone Pot', 49.99, 'Photos/Plants/White Azalea in Two Tone Pot.jpg')
        ";
        mysqli_query($connect, $insert_plants_data_query);
    }

    // Display the plants in a grid
    if ($num > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count % 4 == 0) {
                echo "<div class='row'>";
            }

            echo "<div class='col'>
                <img src=\"" . $row['image_url'] . "\" alt='plant'>
                <div class='row'>
                    <h5>" . $row['name'] . "</h5>
                    <h6>£" . $row['price'] . "</h6>
                </div>
                <div class='row'>
                    <button>Add to Cart</button>
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