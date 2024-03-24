<?php

session_start();



?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agency signup login</title>



</head>

<body>

  <div>

    <form action="../controller/agencySignupController.php"  >

      <label for="username">Enter your Username</label>
      <input type="text" name="username" id="username">

      <br>

      <label for="password">Enter your Password</label>
      <input type="password" name="password" id="password">

      <br>

      <input type="submit" name="submit" value="save" id="submitbtn">

    </form>
  </div>

  <div>

<form action="../controller/agencyLoginController.php">

  <label for="username">Enter your Username</label>
  <input type="text" name="username" id="username">

  <br>

  <label for="agency-password">Enter your Password</label>
  <input type="password" name="password" id="password">

  <br>

  <input type="submit" name="submit" value="get" id="submitbtn">

</form>
</div>



</body>

</html>