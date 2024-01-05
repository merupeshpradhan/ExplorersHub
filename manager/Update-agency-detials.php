<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>

<body>
     <?php
     include_once 'Navbar.php';
     if (!isset($_GET['id'])) {
         header('location:Agency-detials.php');
     }
     require_once "db-connect.php";
     $lid = $_GET['id'];
     // echo "ID is: $eid";
     $qry = "SELECT * FROM agency_lists WHERE id='$lid'";
     $res = $conn->query($qry);
     $sid = $res->fetch_assoc();
     ?>
    <div class="box bgcolor d-flex align-items-center justify-content-center">
        <div class="w-50 text-center">
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
            <form class="row rounded g-3 needs-validation bg-warning"  style="padding: 20px; margin-top:20px;margin-bottom: 20px;" action="update-agency.php" method="post" novalidate>
                <h4 class="text-center">New Agency Application form</h4>
                <input type="hidden" name="id" value="<?php echo $lid ?>">
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Agency name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="agencyName" value="<?php echo $sid['agencyName'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="ownerName" value="<?php echo $sid['ownerName'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationTooltip01" name="email" value="<?php echo $sid['email'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="phone" value="<?php echo $sid['phone'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Location name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="location" value="<?php echo $sid['location'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Street</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="street" value="<?php echo $sid['street'] ?>" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltipUsername" class="form-label">District</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" name="district" id="validationTooltipUsername" value="<?php echo $sid['district'] ?>" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="validationTooltip03" value="<?php echo $sid['state'] ?>" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="validationTooltip03" value="<?php echo $sid['pincode'] ?>" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="validationTooltip03" value="<?php echo $sid['price'] ?>" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="mybtn" style="color: white; padding: 7px;" type="submit" name="updateAgency">Update</button>
                </div>
            </form>
        </div>

    </div>

    <?php
    include_once "footer.php";
    ?>
</body>

</html>