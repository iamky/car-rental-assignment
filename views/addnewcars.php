<?php
session_start();
if (isset($_SESSION['agencyusername'])) {
  echo "<p>Welcome " . $_SESSION['agencyusername'] . "</p>";
} else {
  header("Location: ../views/agency.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add new cars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
  <div>
    <form action="../controller/addnewcarsController.php">
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

      <input type="submit" class="btn btn-primary" name="submit" value="save" id="submitbtn">

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>