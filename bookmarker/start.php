<?php
require_once ("inc/const.php");


$servername = DB_URL;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_NAME;

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE `{$dbname}` CHARACTER SET 'utf8' COLLATE 'utf8_bin';";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

require_once ("inc/db.php");

$sql = "CREATE TABLE `bookmark`.`Groups`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  `permission` text NULL,
  PRIMARY KEY (`id`)
)";

if ($conn->query($sql) === TRUE) {
  echo "Groups table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE `bookmark`.`Categores`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  PRIMARY KEY (`id`)
)";

if ($conn->query($sql) === TRUE) {
  echo "Categores table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


$sql = "CREATE TABLE `bookmark`.`Link`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  `pic` varchar(255) NULL,
  `catid` varchar(255) NULL,
  PRIMARY KEY (`id`)
)";

if ($conn->query($sql) === TRUE) {
  echo "Links table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE `bookmark`.`LinkType`  (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  `linkid` varchar(255) NULL,
  PRIMARY KEY (`id`)
)";

if ($conn->query($sql) === TRUE) {
  echo "Link Types table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

?>

