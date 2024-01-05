<?php
if (isset($_POST['updateAgency'])) {
    require_once "db-connect.php";
    $id = $_POST['id'];
    $agencyName     = $_POST['agencyName'];
    $OwnerName     = $_POST['ownerName'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $location = $_POST['location'];
    $street = $_POST['street'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $price = $_POST['price'];

    move_uploaded_file($tempname, $full_path);

    $qry = "UPDATE agency_lists set agencyName='$agencyName',OwnerName='$OwnerName', email='$email',phone='$phone', location='$location', street='$street', district='$district',state='$state',pincode='$pincode',price='$price' WHERE id='$id'";

    if ($conn->query($qry)) {
        header("location:managment-Home.php?update=ok?id=<?php echo $id ?>");
    } else {
        header("location:managment-Home.php?update=error");
    }
}
