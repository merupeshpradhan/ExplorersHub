<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php
    include_once "Navbar.php";
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $street = $_POST['street'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $price = $_POST['price'];
        $img = $_FILES['image'];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "Uploaded_Images/";
        $full_path=$folder.basename($filename);

        move_uploaded_file($tempname, $full_path);
        require_once "db-connect.php";

        $qry = "INSERT INTO location (name,street,district,state,pincode,price,img) VALUES('$name','$street','$district','$state','$pincode','$price','$full_path')";

        if ($conn->query($qry)) {
            $msg = " Location Added Succsefully ";
        } else {
            echo $conn->error;
        }
    }
    if (isset($msg)) {
        echo $msg;
    }
    ?>
    <div class="box d-flex align-items-center justify-content-center">
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
            <form class="row rounded g-3 needs-validation " action="Add-location.php" method="post" enctype="multipart/form-data" novalidate style="background-color:#c9b8ee; border: 1px solid #327a81;box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);">
                <h1 class="text-center">LOCATION DETIALS</h1>
                <input type="hidden" name="id"> <div class="col-md-4 position-relative">
               
                    <label for="validationTooltip01" class="form-label">Location name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="name" required>
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
                <div class="col-md-4 position-relative">
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
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Location Image</label>
                    <input type="file" name="image" class="form-control" id="validationTooltip03" required>
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