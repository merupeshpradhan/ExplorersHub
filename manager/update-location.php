<?php
if (isset($_POST['updateLocation'])) {
    require_once "db-connect.php";
    $id = $_POST['id'];
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
    $full_path = $folder . basename($filename);

    move_uploaded_file($tempname, $full_path);

    $qry = "UPDATE location set name='$name', street='$street',district='$district', state='$state', pincode='$pincode', price='$price',img='$full_path' WHERE id='$id'";

    if ($conn->query($qry)) {
        header("location:location.php?update=ok?id=<?php echo $id ?>");
    } else {
        header("location:location.php?update=error");
    }
}
