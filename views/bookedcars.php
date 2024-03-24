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