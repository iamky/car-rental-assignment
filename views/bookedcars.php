<?php

session_start();

include('../config/config.php');


echo "<p>Welcome to booked cars page user " . $_SESSION['agencyusername'] . "</p>";
$username = $_SESSION['agencyusername'];
$status = "booked";
$query = "SELECT * FROM cars WHERE status = '$status' ";
$exc = mysqli_query($conn, $query);

$norows = mysqli_num_rows($exc);

if ($norows >= 1) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit cars</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css" type="text/css">
        <script>
        </script>
    </head>

    <body>




        <table Border="1px">

            <tr>
                <th>vehicle model</th>
                <th>vehicle number</th>
                <th>customer who booked the car</th>
                <th>no of days the car is booked for</th>
                <th colspan="2">the date car got booked</th>
            </tr>
            <?php while ($info = mysqli_fetch_assoc($exc)) {
            ?>

                <tr>
                    <td><?php echo $info['vmodel']; ?></td>
                    <td><?php echo $info['vnumber']; ?></td>
                    <td><?php echo $info['cusername']; ?></td>
                    <td><?php echo $info['days']; ?></td>
                    <td><?php echo $info['bookdate']; ?></td>






            <?php
            }
        } else {
            echo "no data";
        }
            ?>
        </table>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>

    </html>