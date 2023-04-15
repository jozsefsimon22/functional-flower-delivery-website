<?php
$create_table_query = "CREATE TABLE IF NOT EXISTS `flowers` (
    `id` int(10) AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    `image_url` varchar(225) NOT NULL,
    PRIMARY KEY(`id`)
)";

mysqli_query($connect, $create_table_query);
?>