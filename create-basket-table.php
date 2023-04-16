<?php
$create_table_query = "CREATE TABLE IF NOT EXISTS `basket` (
    `id` int(10) AUTO_INCREMENT,
    `flower_id` int(10) NOT NULL,
    `quantity` int(10) NOT NULL,
    `user_id` varchar(255) NOT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY (`flower_id`) REFERENCES `flowers`(`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`email`)
)";

mysqli_query($connect, $create_table_query);
?>