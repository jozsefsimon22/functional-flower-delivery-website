<?php
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `email` VARCHAR(255) NOT NULL,
  `password` CHAR(225) NOT NULL,
  `firstName` CHAR(50) NOT NULL,
  `lastName` CHAR(50) NOT NULL,
  `phoneNumber` CHAR(20) DEFAULT NULL,
  `street` CHAR(225) DEFAULT NULL,
  `city` CHAR(225) DEFAULT NULL,
  `country` CHAR(225) DEFAULT NULL,
  `postcode` CHAR(225) DEFAULT NULL,
  PRIMARY KEY (`email`)
);";

mysqli_query($connect, $query);
?>