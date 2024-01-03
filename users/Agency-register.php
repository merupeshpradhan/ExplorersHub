<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>

<body>
    <?php
    include_once "Navbar.php";
    if (isset($_POST['add'])) {
        $agencyName	 = $_POST['agencyName'];
        $location = $_POST['location'];
        $street = $_POST['street'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $price = $_POST['price'];
        require_once "db-connect.php";

        $qry = "INSERT INTO agency_application (agencyName,location,street,district,state,pincode,price) VALUES(' $agencyName','$location','$street','$district','$state','$pincode','$price')";

        if ($conn->query($qry)) {
            $msg = " Location Added Succsefully ";
        } else {
            echo $conn->error;
        }
    }
    // if (isset($msg)) {
    //     echo $msg;
    // }
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
            <form class="row rounded g-3 needs-validation " action="Agency-register.php" method="post" novalidate>
                <h4 class="text-center">New Agency Application form</h4>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Agency name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="agencyName" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">Location name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="location" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Street</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="street" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltipUsername" class="form-label">District</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" name="district" id="validationTooltipUsername" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="mybtn" style="color: white; padding: 7px;" type="submit" name="add">Add Location</button>
                </div>
            </form>
        </div>

    </div>

    <?php
    include_once "footer.php";
    ?>
</body>

</html>