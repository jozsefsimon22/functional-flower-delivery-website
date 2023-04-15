<?php
$create_plants_table_query = "CREATE TABLE IF NOT EXISTS `plants` (
    `id` int(10) AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `price` decimal(5,2) NOT NULL,
    `image_url` varchar(225) NOT NULL,
    PRIMARY KEY(`id`)
)";

mysqli_query($connect, $create_plants_table_query);
?>