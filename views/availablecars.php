<?php

session_start();

include('../config/config.php');


    echo "<p>Welcome to booking page user " . $_SESSION['customerusername'] . "</p>";
    $username = $_SESSION['customerusername'];
    $status = "available";
    $query = "SELECT * FROM cars WHERE status = '$status' ";
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
                <th colspan="2">Book cars</th>
            </tr>
            <?php while ($info = mysqli_fetch_assoc($exc)) {
            ?>

                <tr>
                    <td><?php echo $info['vmodel']; ?></td>
                    <td><?php echo $info['vnumber']; ?></td>
                    <td><?php echo $info['capacity']; ?></td>
                    <td><?php echo $info['rent']; ?></td>
                    
                    <?php if (isset($_SESSION['customerusername'])) { ?>
                    
                    <td>


                    

                        <div>
                            <form action="../controller/bookcarsController.php">

                                <label for="days">Select number of days u wanna rent the car</label>
                                <select name="days">

                                    <?php
                                    for ($i = 1; $i <= 30; $i++) {
                                    ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                

                                <p><?php $currentDate = date('Y-m-d'); echo $currentDate; ?></p>

                                <br>
                                <input type="hidden" name="bookdate" value="<?php echo $currentDate; ?>" />
                                <input type="hidden" name="vnumber" value="<?php echo $info['vnumber'] ?>" />
                                <input type="submit" name="submit" value="book" id="submitbtn">

                            </form>
                        </div>

                    </td>

                    <?php }

                    else {
                        ?> <td><a href="./customer.php">Login to book cars</a></td>
                    <?php
                    }
                    ?>





        <?php
            }
        } else {
            echo "no data";
        }
     ?>
        </table>