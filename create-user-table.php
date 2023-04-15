<?php
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `address` char(225) DEFAULT NULL,
  `phoneNumber` char(20) DEFAULT NULL,
  PRIMARY KEY (`userID`)
);";

mysqli_query($connect, $query);
?>