<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPortfolio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS myPortfolio";
if ($conn->query($sql) === TRUE) {
} else {
}

$sql = "CREATE TABLE IF NOT EXISTS `profile` (\n"

  . "  `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,\n"

  . "  `pagetitle` TEXT,\n"

  . "  `logo` TEXT,\n"

  . "  `metadescription` TEXT,\n"

  . "  `fullname` VARCHAR(30) NOT NULL,\n"

  . "  `description` VARCHAR(30) NOT NULL,\n"

  . "  `email` VARCHAR(50),\n"

  . "  `dob` TEXT,\n"

  . "  `number` TEXT,\n"

  . "  `location` TEXT,\n"

  . "  `facebook` TEXT,\n"

  . "  `instagram` TEXT,\n"

  . "  `linkedin` TEXT\n"

  . "  );";

$profile = $conn->query("SELECT * FROM profile")->fetch_assoc();