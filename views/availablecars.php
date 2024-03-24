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
                                    <select name="days" class="form-select">

                                        <?php
                                        for ($i = 1; $i <= 30; $i++) {
                                        ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>


                                    <p><?php $currentDate = date('Y-m-d');
                                        echo $currentDate; ?></p>

                                    <br>
                                    <input type="hidden" name="bookdate" value="<?php echo $currentDate; ?>" />
                                    <input type="hidden" name="vnumber" value="<?php echo $info['vnumber'] ?>" />
                                    <input type="submit" class="btn btn-primary" name="submit" value="book" id="submitbtn">

                                </form>
                            </div>

                        </td>

                    <?php } else {
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



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>

    </html>