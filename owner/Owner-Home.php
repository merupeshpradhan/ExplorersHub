<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    include_once "OwnerNav.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto my-5">
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
                <div class="table-responsive">
                    <table class="table  table-bordered table-success ">
                        <?php
                        require_once "db-connect.php";
                        $qry = "SELECT id,name,email,mobile,position FROM manager";
                        $res = $conn->query($qry);
                        ?>
                        <tr>
                            <th colspan="6" class="text-center">MANAGER</th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>POSITION</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        while ($mng = $res->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $mng['id']; ?></td>
                                <td><?php echo $mng['name']; ?></td>
                                <td><?php echo $mng['email']; ?></td>
                                <td><?php echo $mng['mobile']; ?></td>
                                <td><?php echo $mng['position']; ?></td>
                                <td>
                                    <a href="manager-detials.php?id=<?php echo $mng['id'] ?>" class="btn btn-sm btn-outline-info m-1">Detials</a>
                                    <a href="update.php?id=<?php echo $mng['id'] ?>" class="btn btn-sm btn-outline-warning m-1">Update</a>
                                    <a href="delete-detials.php?id=<?php echo $mng['id'] ?>" class="btn btn-sm btn-outline-danger m-1">Remove</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <?PHP
    // $conn->close();
    ?>
</body>

</html>