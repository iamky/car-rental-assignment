<?php

session_start();


include('../config/config.php');


$username = $_REQUEST['username'];
//echo($username);

$password = $_REQUEST['password'];

$button = $_REQUEST['submit'];

if ($button == "get") {

  $query = "SELECT * FROM customers WHERE username ='$username' And password ='$password'";
  // echo $query;
  $exc = mysqli_query($conn, $query);

  $norows = mysqli_num_rows($exc);
  // echo $norows;
  if ($norows == 1) {

    // while($userinfo=mysqli_fetch_assoc($exc)){

    //     echo "Username = ".$userinfo['username']; //."<br>".$userinfo['password']

    // }

    $_SESSION['customerusername'] = $username;
    $_SESSION['customerpassword'] = $password;

    // $cookiename = $name;
    // $cookievalue = $password;
    // $expiration = time() + (86400 * 30);
    // $path = "/";
    // setcookie($cookiename, $cookievalue, $expiration, $path);

    header("Location: ../views/availablecars.php");
    //header('../views/addNewCars.php');
    // header("../views/addNewCars.php");

  } else {
    echo "No User Found...";
  }
}
