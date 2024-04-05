<?php

session_start();


include('../config/config.php');


$cusername = $_SESSION['customerusername'];
//echo($username);

$days = $_REQUEST['days'];
$bookdate = $_REQUEST['bookdate'];
$vnumber = $_REQUEST['vnumber'];
$status = "booked";

$button = $_REQUEST['submit'];

if ($button == "book") {


  $query = "UPDATE cars SET cusername='$cusername', days='$days', bookdate='$bookdate', status='$status' WHERE vnumber='$vnumber' ";
  //$query = "INSERT INTO cars (cusername, days, bookdate) VALUES ('$cusername','$days','$bookdate') WHERE vnumber='$vnumber'";
  //echo $query;
  //$query .= "UPDATE cars SET status='$status' WHERE vnumber='$vnumber' ";
  // echo $query;
  $exc = mysqli_query($conn, $query);

  //$norows = mysqli_num_rows($exc);
  // echo $norows;
  if ($exc) {


    header("Location: ../views/availablecars.php");
    die();
  } else {
    echo "Cannot book car...";
  }
}
