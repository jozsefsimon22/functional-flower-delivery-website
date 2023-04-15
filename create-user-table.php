<?php
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `email` int(10) NOT NULL,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `phoneNumber` char(20) DEFAULT NULL,
  `street` char(225) DEFAULT NULL,
  `city` char(225) DEFAULT NULL,
  `country` char(225) DEFAULT NULL,
  `postcode` char(225) DEFAULT NULL,
  PRIMARY KEY (`email`)
);";

mysqli_query($connect, $query);
?>