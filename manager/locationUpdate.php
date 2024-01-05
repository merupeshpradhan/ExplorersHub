<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Update</title>
</head>

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php
    include_once 'Navbar.php';
    if (!isset($_GET['id'])) {
        header('location:manager-detials.php');
    }
    require_once "db-connect.php";
    $lid = $_GET['id'];
    // echo "ID is: $eid";
    $qry = "SELECT * FROM location WHERE id='$lid'";
    $res = $conn->query($qry);
    $sid = $res->fetch_assoc();
    ?>
    <div class="box d-flex align-items-center justify-content-center">
        <div class="w-50 text-center">
            <form class="row rounded g-3 needs-validation" action="update-location.php" method="post" style=" background-color:#c9b8ee; border: 1px solid #327a81;box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);" novalidate>
                <h1 class="text-center">UPDATE LOCATION</h1>
                <input type="hidden" name="id" value="<?php echo $sid['id'] ?>">
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Location name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="name" value="<?php echo $sid['name'] ?>" required>
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
                <div class="col-md-4 position-relative">
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
                <!-- <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Location Image</label>
                    <input type="file" name="image" class="form-control" id="validationTooltip03" value="<?php echo $sid['img'] ?>" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div> -->
                <div class="col-12 mb-3">
                    <button class="mybtn" style="color: white; padding: 7px;" type="submit" name="updateLocation">Update Data</button>
                </div>
            </form>
        </div>
        
    </div>
    <?php
    include_once "footer.php";
    ?>

</body>

</html>