<?php

include('../config/config.php');

$username = $_REQUEST['username'];

$password = $_REQUEST['password'];

$button = $_REQUEST['submit'];

// $reg_date = date('Y-m-d H:i:s');

if ($button == 'save') {

  if (isset($username) && isset($password)) {

    $query = "INSERT INTO agencyUsers VALUES ('$username','$password')";

    $exc = mysqli_query($conn, $query);

    if ($exc) {

      //echo "User data saved...";
      header("Location: ../index.php");
      die();
    } else {
      echo "User data cannot be saved";
    }
  }
}
