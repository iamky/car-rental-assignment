<?php

session_start();


include ('../config/config.php');


$ausername = $_SESSION['agencyusername'];
//echo($username);
$oldvnumber = $_REQUEST['oldvnumber'];
$newvmodel = $_REQUEST['newvmodel'];
$newvnumber = $_REQUEST['newvnumber'];
$newcapacity = $_REQUEST['newcapacity'];
$newrent = $_REQUEST['newrent'];

$button = $_REQUEST['submit'];

if ($button == "update") {

$query = "UPDATE cars SET vmodel='$newvmodel', vnumber='$newvnumber', capacity='$newcapacity', rent='$newrent' WHERE vnumber='$oldvnumber' ";
  // echo $query;
  $exc = mysqli_query($conn, $query);

  $norows = mysqli_num_rows($exc);
  // echo $norows;
  if ($norows == 1) {


    header("Location: ../views/editcars.php");
    

  } else {
    echo "Cannot update car...";
  }
}
?>