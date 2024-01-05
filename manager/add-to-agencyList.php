<?php
include_once "Navbar.php";
if (!isset($_GET['id'])) {
    header('location:user-home.php');
}
require_once "db-connect.php";
$bid = $_GET['id'];
$location = "SELECT * FROM agency_application where id = '$bid' ";
$res = $conn->query($location);
while ($loc = $res->fetch_assoc()) {
    $agencyName = $loc['agencyName'];
    $ownerName = $loc['ownerName'];
    $phone = $loc['phone'];
    $email = $loc['email'];
    $location = $loc['location'];
    $street = $loc['street'];
    $district = $loc['district'];
    $state = $loc['state'];
    $pincode = $loc['pincode'];
    $price = $loc['price'];
}

echo $agencyName;
echo $ownerName;
echo $phone;
echo $email;
echo $location;
echo $street;
echo $district;
echo $state;
echo $pincode;
echo $price;

$Insertqry = "INSERT INTO agency_lists (agencyName,ownerName,phone,email,location,street,district,state,pincode,price) VALUES('$agencyName','$ownerName','$phone','$email','$location','$street','$district','$state','$pincode','$price')";

if ($conn->query($Insertqry)) {
    // $msg = " booking Add ";
    $qry = "DELETE FROM agency_application WHERE id=$bid";
    if ($conn->query($qry)) {
        header("location:New-agency.php?status=ok");
    }

    header("location:new-agency.php?status=ok");
} else {
    echo $conn->error;
}

$conn->close();
