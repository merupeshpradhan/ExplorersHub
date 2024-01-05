<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Manager Detials</title>
</head>

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php
    include_once 'OwnerNav.php';
    if (!isset($_GET['id'])) {
        header('location:manager-detials.php');
    }
    require_once "db-connect.php";
    $eid = $_GET['id'];
    // echo "ID is: $eid";
    $qry = "SELECT * FROM manager WHERE id='$eid'";
    $res = $conn->query($qry);
    $sid = $res->fetch_assoc();
    ?>
    <div class="box d-flex align-items-center justify-content-center">
        <div class="w-50 text-center ">
            <?php
            if (isset($msg)) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $msg; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <form action="update-detials.php" method="post" enctype="multipart/form-data" class="row rounded g-3 needs-validation" style="background-color:#c9b8ee; border: 1px solid #327a81;box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);">
                <h1 class="text-center">ADD MANAGER</h1>
                <input type="hidden" name="id" value="<?php echo $sid['id'] ?>">
                <div class="col-md-5 position-relative">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $sid['name'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $sid['email'] ?>" required>
                </div>
                <div class="col-md-3 position-relative">
                    <label for="dob" class="form-label">DOB</label>
                    <div class="input-group">
                        <input type="date" name="dob" id="" class="form-control" value="<?php echo $sid['dob'] ?>" required>
                    </div>
                </div>
                <div class="col-md-5 position-relative">
                    <label for="gender" class="form-label">Gender</label>
                    <div>
                        <input type="radio" style="width: 50px;" name="gender" value="Male" <?php $sid['gender'] === "Male" ? print "checked" : "" ?>>Male
                        <input type="radio" style="width: 50px;" name="gender" value="Female" <?php $sid['gender'] === "Female" ? print "checked" : "" ?>>Female<br>
                    </div>
                </div>
                <input type="hidden" name="position" class="form-control" value="manager" required>
                <div class="col-md-5 position-relative">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="number" name="mobile" class="form-control" id="mobile" value="<?php echo $sid['mobile'] ?>" required>
                </div>
                <!-- <div class="col-md-4 position-relative">
                    <label for="file" class="form-label">Passport Photo</label>
                    <input type="file" class="form-control"  name="image" id="file" required>
                </div> -->
                <div class="col-md-3 position-relative">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $sid['address'] ?>" required>
                </div>
                <div class="col-md-3 position-relative">
                    <label for="password" class="form-label">Set Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $sid['password'] ?>" required>
                </div>
                <div class="col-12 mb-3">
                    <button class="mybtn" style="color: white; padding: 7px;" type="submit" name="updateManager">Add Location</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>