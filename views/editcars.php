<?php

session_start();

include('../config/config.php');

if (isset($_SESSION['agencyusername'])) {

    echo "<p>Welcome to edit page user " . $_SESSION['agencyusername'] . "</p>";
    $username = $_SESSION['agencyusername'];
    $query = "SELECT * FROM cars WHERE username='$username'";
    $exc = mysqli_query($conn, $query);

    $norows = mysqli_num_rows($exc);

    if ($norows >= 1) {

?>

        <table Border="1px">

            <tr>
                <th>vehicle model</th>
                <th>vehicle number</th>
                <th>seating capacity</th>
                <th>rent per day</th>
                <th colspan="2">Edit details</th>
            </tr>
            <?php while ($info = mysqli_fetch_assoc($exc)) {
            ?>

                <tr>
                    <td><?php echo $info['vmodel']; ?></td>
                    <td><?php echo $info['vnumber']; ?></td>
                    <td><?php echo $info['capacity']; ?></td>
                    <td><?php echo $info['rent']; ?></td>
                    <td><button type="button">Edit</button></td>
                <td>

                    <div>
                        <form action="../controller/editcarsController.php">

                            <label for="newvmodel">Enter new vehicle model</label>
                            <input type="text" name="newvmodel" id="newvmodel">

                            <br>

                            <label for="newvnumber">Enter new vehicle number</label>
                            <input type="text" name="newvnumber" id="newvnumber">

                            <br>

                            <label for="newcapacity">Enter new vehicle seating capacity</label>
                            <input type="text" name="newcapacity" id="newcapacity">

                            <br>

                            <label for="newrent">Enter new rent per day</label>
                            <input type="text" name="newrent" id="newrent">

                            <br>
                            <input type="hidden" name="oldvnumber" value="<?php echo $info['vnumber'] ?>" />
                            <input type="submit" name="submit" value="update" id="submitbtn">

                        </form>
                    </div>

                </td>
    <?php
            }
        } else {
            echo "no data";
        }
    }
    else{
        header("Location: ./agency.php");
    } ?>
        </table>