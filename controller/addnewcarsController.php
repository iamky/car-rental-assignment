<?php

session_start();


include('../config/config.php');


$ausername = $_SESSION['agencyusername'];
//echo($username);

$vmodel = $_REQUEST['vmodel'];
$vnumber = $_REQUEST['vnumber'];
$capacity = $_REQUEST['capacity'];
$rent = $_REQUEST['rent'];
$status = "available";

$button = $_REQUEST['submit'];

if ($button == "save") {

  $query = "INSERT INTO cars (ausername, vmodel, vnumber, capacity, rent, status) VALUES ('$ausername','$vmodel','$vnumber','$capacity','$rent', '$status')";
  echo $query;
  $exc = mysqli_query($conn, $query);

  $norows = mysqli_num_rows($exc);
  // echo $norows;
  if ($norows == 1) {


    header("Location: ../views/editcars.php");
  } else {
    echo "Cannot save car...";
  }
}
