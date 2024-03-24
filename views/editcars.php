<?php

session_start();

include('../config/config.php');

if (isset($_SESSION['agencyusername'])) {

    echo "<p>Welcome to edit page user " . $_SESSION['agencyusername'] . "</p>";
    $ausername = $_SESSION['agencyusername'];
    $query = "SELECT * FROM cars WHERE ausername='$ausername'";
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
                    <th colspan="2">Edit details</th>
                </tr>
                <?php while ($info = mysqli_fetch_assoc($exc)) {
                ?>

                    <tr>
                        <td><?php echo $info['vmodel']; ?></td>
                        <td><?php echo $info['vnumber']; ?></td>
                        <td><?php echo $info['capacity']; ?></td>
                        <td><?php echo $info['rent']; ?></td>
                        <!-- <td><button class="btn btn-primary">Edit</button></td> -->
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
                                    <input type="submit" class="btn btn-primary" name="submit" value="update" id="submitbtn">

                                </form>
                            </div>

                        </td>
            <?php
                }
            } else {
                echo "no data";
            }
        } else {
            header("Location: ./agency.php");
        } ?>
            </table>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        </body>

        </html>