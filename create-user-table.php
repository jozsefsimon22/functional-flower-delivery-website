<?php
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `email` int(10) NOT NULL,
  `password` VARCHAR(225) NOT NULL,
  `firstName` VARCHAR(50) NOT NULL,
  `lastName` VARCHAR(50) NOT NULL,
  `phoneNumber` VARCHAR(20) DEFAULT NULL,
  `street` VARCHAR(225) DEFAULT NULL,
  `city` VARCHAR(225) DEFAULT NULL,
  `country` VARCHAR(225) DEFAULT NULL,
  `postcode` VARCHAR(225) DEFAULT NULL,
  PRIMARY KEY (`email`)
);";

mysqli_query($connect, $query);
?>