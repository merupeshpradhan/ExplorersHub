<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            padding: 10px;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table td:last-child {
            font-size: 0.95em;
            line-height: 1.4;
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
                content: "Email:";
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

<body>
    <?php
    include_once "OwnerNav.php";
    ?>

    <div class="d-flex main-container justify-content-center">
        <div class="containers">
            <div class="table-container">
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

                <div class="mx-auto">
                    <div class="table-users">
                        <table cellspacing="0">
                            <?php
                            require_once "db-connect.php";
                            $qry = "SELECT id,name,email,mobile,position FROM manager";
                            $res = $conn->query($qry);
                            ?>
                            <div class="header">Manager's</div>
                            <tr>
                                <th class="text-center">SL NO.</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">PHONE</th>
                                <th class="text-center">POSITION</th>
                                <th class="text-center">Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            while ($mng = $res->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $i ?>
                                    </td>
                                    <td>
                                        <?php echo $mng['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $mng['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $mng['mobile']; ?>
                                    </td>
                                    <td>
                                        <?php echo $mng['position']; ?>
                                    </td>
                                    <td>
                                        <a href="manager-detials.php?id=<?php echo $mng['id'] ?>"
                                            class="btn btn-sm btn-outline-info m-1">Detials</a>
                                        <a href="update.php?id=<?php echo $mng['id'] ?>"
                                            class="btn btn-sm btn-outline-warning m-1">Update</a>
                                        <a href="delete-detials.php?id=<?php echo $mng['id'] ?>"
                                            class="btn btn-sm btn-outline-danger m-1">Remove</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?PHP
    // $conn->close();
    ?>
</body>

</html>