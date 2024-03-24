<?php
session_start();
if(isset($_SESSION['agencyusername'])){
    echo "<p>Welcome ".$_SESSION['agencyusername']."</p>";
}
else{
    header("Location: ../views/agency.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add new cars</title>

</head>
<body>
  <div>
    <form action="../controller/addnewcarsController.php"  >
<p></p>
      <label for="vmodel">Enter the vehicle model</label>
      <input type="text" name="vmodel" id="vmodel">

      <br>

      <label for="vnumber">Enter the vehicle number</label>
      <input type="text" name="vnumber" id="vnumber">

      <br>

      <label for="capacity">Enter the vehicle seating capacity</label>
      <input type="text" name="capacity" id="capacity">

      <br>

      <label for="rent">Enter the rent per day</label>
      <input type="text" name="rent" id="rent">

      <br>

      <input type="submit" name="submit" value="save" id="submitbtn">

    </form>
  </div>

 
</body>

</html>