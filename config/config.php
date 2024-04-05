<?php
$servername = "localhost";
$username = "id22004240_admin";
$password = "Id22004240_admin";
$dbname = "id22004240_rentaldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection Failed :" . $conn->connect_error);
}
