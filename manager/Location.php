<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location's</title>
</head>

<body>
    <?php
    include_once "Navbar.php";
    ?>
    <div class="bgcolor main-container d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="mx-auto ">
                    <?php
                    // Update Message
                    if (isset($_GET['update'])) {
                        $status = $_GET['update'];
                        if ($status === "ok") {
                            echo "One Record Updated";
                        } else if ($status === "error") {
                            echo "Error While Updating. Check the Manager ID";
                        }
                    }

                    // Delete Message
                    if (isset($_GET['status'])) {
                        $status = $_GET['status'];
                        if ($status === "ok") {
                            echo "One Record Deleted";
                        } else if ($status === "error") {
                            echo "Error While Deleting. Check the student ID";
                        }
                    }
                    ?>
                    <div class="table-responsive ">
                        <table class="mytable table ">
                            <?php
                            require_once "db-connect.php";
                            $qry = "SELECT id,name,street,district,pincode,price FROM location";
                            $res = $conn->query($qry);
                            ?>
                            <tr>
                                <th colspan="8" class="text-center">LOCATION'S</th>
                            </tr>
                            <tr class="">
                                <th>LOCATION ID</th>
                                <th>LOCATION NAME</th>
                                <th>STREET</th>
                                <th>DISTRICT</th>
                                <th>PINCODE</th>
                                <th>LOCATION PRICE</th>
                                <th>LOCATION AVAILABLE</th>
                                <th>MODIFICATION</th>
                            </tr>
                            <?php
                            while ($loc = $res->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $loc['id']; ?></td>
                                    <td><?php echo $loc['name']; ?></td>
                                    <td><?php echo $loc['street']; ?></td>
                                    <td><?php echo $loc['district']; ?></td>
                                    <td><?php echo $loc['pincode']; ?></td>
                                    <td><?php echo $loc['price']; ?></td>
                                    <td><?php echo $loc['pincode']; ?></td>
                                    <td>
                                        <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Update</a>
                                        <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Remove</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                        <div>
                            <button class="mybtn"><a class="text-white nav-link" href="Add-location.php">Add New Location</a></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?PHP
    $conn->close();
    ?>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>