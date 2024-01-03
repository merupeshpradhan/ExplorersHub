<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location's</title>
    <style>
        body {
            background-color: #91ced4;
        }

        body * {
            box-sizing: border-box;
        }

        .header {
            background-color: #d2b2ff;
            color: white;
            font-size: 1.5em;
            /* padding: 1rem; */
            text-align: center;
            text-transform: uppercase;
        }

        .main-container {
            min-height: 120vh;
        }

        .table-container {
            margin-top: 25px;
        }

        .table-users {
            border: 1px solid #327a81;
            border-radius: 10px;
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            max-width: calc(100% - 2em);
            margin: 1em auto;
            overflow: hidden;
            width: 800px;
        }

        table {
            width: 100%;
        }

        table td,
        table th {
            color: #2b686e;
            padding: 10px;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table td:last-child {
            font-size: 0.95em;
            line-height: 1.4;
            text-align: left;
        }

        table th {
            background-color: #e9d1e7;
            font-weight: 700;
        }

        table tr:nth-child(2n) {
            background-color: white;
        }

        table tr:nth-child(2n+1) {
            background-color: #f1e8ff;
        }

        @media screen and (max-width: 620px) {

            table,
            tr,
            td {
                display: block;
            }

            .table-container {
                margin-top: 25px;
            }

            td:first-child {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 60px;

            }

            td:not(:first-child) {
                clear: both;
                margin-left: 55px;
                padding: 4px 20px 4px 90px;
                position: relative;
            }

            td:not(:first-child):before {
                color: #91ced4;
                content: "";
                display: block;
                left: 0;
                position: absolute;
            }

            td:nth-child(2):before {
                content: "Loc Name:";
            }

            td:nth-child(3):before {
                content: "Street:";
            }

            td:nth-child(4):before {
                content: "District:";
            }

            td:nth-child(5):before {
                content: "Pincode:";
            }

            td:nth-child(6):before {
                content: "Location Price:";
            }

            td:nth-child(7):before {
                content: "Location AVL:";
            }

            td:nth-child(8):before {
                content: "Modification";
            }

            table td:last-child {
                line-height: 2.4;
                text-align: center;
            }

            tr {
                padding: 10px 0;
                position: relative;
            }

            tr:first-child {
                display: none;
            }
        }

        /* @media screen and (max-width: 620px) {
            .table-container{
                width: 20px;
            }
        } */
    </style>
</head>

<body>
    <?php
    include_once "Navbar.php";
    ?>
    <div class="main-container d-flex  justify-content-center">
        <div class="containers">
            <div class="table-container">
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
                    <div class="">
                        <table cellspacing="0">
                            <?php
                            require_once "db-connect.php";
                            $qry = "SELECT id,name,street,district,pincode,price FROM location";
                            $res = $conn->query($qry);
                            ?>
                            <div class="header">Location</div>
                            <tr>
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
                            $i=1;
                            while ($loc = $res->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $loc['name']; ?></td>
                                    <td><?php echo $loc['street']; ?></td>
                                    <td><?php echo $loc['district']; ?></td>
                                    <td><?php echo $loc['pincode']; ?></td>
                                    <td><?php echo $loc['price']; ?></td>
                                    <td><?php echo $loc['pincode']; ?></td>
                                    <td class="td-actions text-right">
                                        <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Update</a>
                                        <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Remove</a>
                                    </td>
                                </tr>
                            <?php
                            $i++;
                            }
                            ?>

                        </table>
                        <div>
                            <button class="mybtn" style="margin-top: 25px;"><a class="text-white nav-link" href="Add-location.php">Add New Location</a></button>
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