<?php
    include_once "Navbar.php";
    if (!isset($_GET['id'])) {
        header('location:user-home.php');
    }
    require_once "db-connect.php";
    $bid = $_GET['id'];
    $location = "SELECT * FROM location where id = '$bid' ";
    $res = $conn->query($location);
    while ($loc = $res->fetch_assoc()) {
        $location = $loc['name'];
        $price = $loc['price'];
    }

    // echo $location;
    // echo $agencyName;
    // echo $price;

    $Insertqry = "INSERT INTO booking_list (location,price) VALUES('$location','$price')";

    if ($conn->query($Insertqry)) {
        // $msg = " booking Add ";
        header("location:booking.php?status=ok");
    } else {
        echo $conn->error;
    }

    $conn->close();
?>