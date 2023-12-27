<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Request</title>
</head>

<body>
    <?php
    include_once "Navbar.php";
    ?>
    <div class="bgcolor main-container d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                    <div class="table-responsive p-5">
                        <table class="mytable table ">
                            <!-- <?php
                                    require_once "db-connect.php";
                                    $qry = "SELECT id,name,street,district,pincode,price FROM location";
                                    $res = $conn->query($qry);
                                    ?> -->
                            <tr>
                                <th colspan="9" class="text-center">New Request</th>
                            </tr>
                            <tr class="">
                                <th>REQUEST ID</th>
                                <th>AGENCY NAME</th>
                                <th>LOCATION NAME</th>
                                <th>STREET</th>
                                <th>DISTRICT</th>
                                <th>STATE</th>
                                <th>PINCODE</th>
                                <th>LOCATION PRICE</th>
                                <th>ACTION</th>
                            </tr>
                            <!-- <?php
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
                    ?> -->
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Accept</a>
                                    <a href="delete-detials.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-danger p-1">Cancel</a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>