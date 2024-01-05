<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Detials</title>
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
            /* margin: 1em auto; */
            overflow: hidden;
            width: 95vw;
        }

        table {
            width: 100%;
        }

        table td,
        table th {
            color: #2b686e;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table td:last-child {
            font-size: 0.95em;
            line-height: 2.4;
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
                padding: 4px 20px 4px 115px;
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
                content: "Name:";
            }

            td:nth-child(3):before {
                content: "Email :";
            }

            td:nth-child(4):before {
                content: "Phone:";
            }

            td:nth-child(5):before {
                content: "Position:";
            }

            td:nth-child(6):before {
                content: "Action:";
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

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php
    include_once "Navbar.php";
    if (!isset($_GET['id'])) {
        header('location:managment-home.php');
    }
    require_once "db-connect.php";
    $eid = $_GET['id'];
    // echo "ID is: $eid";
    ?>
    <div class="main-container d-flex  justify-content-center">
        <div class="containers">
            <div class="table-container">
                <div class="mx-auto">
                    <div class="table-users">
                        <table cellspacing="0">
                            <div class="header">All Agency</div>
                            <tr>
                                <th class="text-center">AGENCY NAME</th>
                                <th class="text-center">OWNER NAME</th>
                                <th class="text-center">PHONE</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">LOCATION NAME</th>
                                <th class="text-center">STATE</th>
                                <th class="text-center">LOCATION PRICE</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                            <?php
                            $qry = "SELECT * FROM agency_lists WHERE id=$eid";
                            $res = $conn->query($qry);
                            if ($res->num_rows > 0) {
                                $loc = $res->fetch_assoc();
                                // print_r($mng);

                            ?>
                                 <tr>
                                    <td><?php echo $loc['agencyName']; ?></td>
                                    <td><?php echo $loc['ownerName']; ?></td>
                                    <td><?php echo $loc['phone']; ?></td>
                                    <td><?php echo $loc['email']; ?></td>
                                    <td><?php echo $loc['location']; ?></td>
                                    <td><?php echo $loc['state']; ?></td>
                                    <td><?php echo $loc['price']; ?></td>
                                    <td>
                                        <a href="Update-agency-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Update</a>
                                        <a href="delete-agency.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Remove</a>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
                            } else {
                                echo "No Record Found";
                            }
                            $conn->close();
?>
<?php
include_once "footer.php";
?>
</body>

</html>