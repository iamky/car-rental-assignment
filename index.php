<?php
session_start();

echo "hello wrld";





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script>
    function redirect(event) {
      // console.log(event.value);
      if (event.value === 'customer') {
        window.location.href = './views/customer.php';
      }
      if (event.value === "agency") {
        window.location.href = './views/agency.php';
      }
    }
  </script>
</head>

<body>
  <input type="button" value="customer" onclick="redirect(this)">
  <input type="button" value="agency" onclick="redirect(this)">


</body>

</html>
