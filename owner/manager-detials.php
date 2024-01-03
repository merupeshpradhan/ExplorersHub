<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Detials</title>
</head>

<body>
    <?php
    include_once "OwnerNav.php";
    if (!isset($_GET['id'])) {
        header('location:Owner-Home.php');
    }
    require_once "db-connect.php";
    $eid = $_GET['id'];
    // echo "ID is: $eid";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto my-5">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>DOB</th>
                        <th>ADDRESS</th>
                        <th>MOBILE</th>
                        <th>EMAIL</th>
                        <th>POSITION</th>
                    </tr>
                    <?php
                    $qry = "SELECT * FROM manager WHERE id=$eid";
                    $res = $conn->query($qry);
                    if ($res->num_rows > 0) {
                        $mng = $res->fetch_assoc();
                        // print_r($mng);
                    
                        ?>
                        <tr>
                            <td>
                                <?php echo $mng['id'] ?>
                            </td>
                            <td>
                                <?php echo $mng['name'] ?>
                            </td>
                            <td>
                                <?php echo $mng['gender'] ?>
                            </td>
                            <td>
                                <?php echo $mng['dob'] ?>
                            </td>
                            <td>
                                <?php echo $mng['address'] ?>
                            </td>
                            <td>
                                <?php echo $mng['mobile'] ?>
                            </td>
                            <td>
                                <?php echo $mng['email'] ?>
                            </td>
                            <td>
                                <?php echo $mng['position'] ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php
                    } else {
                        echo "No Record Found";
                    }
                    $conn->close();
                    ?>
</body>

</html>