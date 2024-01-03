<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Manager</title>
</head>

<body>
    <?php
    // error_reporting(0);
    include_once "OwnerNav.php";

    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $img = $_POST['image'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        require_once "db-connect.php";

        $qry = "INSERT INTO manager (name,gender,position,email,mobile,address,password) VALUES('$name','$gender','$position','$email','$mobile','$address','$password')";

        if ($conn->query($qry)) {
            $msg = "One Manager Add Succsefully ";
        } else {
            echo $conn->error;
        }
    }
    if (isset($msg)) {
        echo $msg;
    }
    ?>
    <div class="container border w-25 text-center ">
        <h1>Add Manager</h1>
        <form action="Add-manager.php" method="post" enctype="multipart/form-data" class="my-3">
            <input type="text" name="name" placeholder="Full Name"><br>
            <label for="gender" class="mt-3">Gender :</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <label for="dob" class="mt-3">DOB </label><input type="date" name="dob" id="">
            <input type="email" name="email" placeholder="Email" class="mt-3"><br>
            <input type="hidden" name="position" placeholder="Email" value="manager" class="mt-3">
            <input type="number" name="mobile" placeholder="Phone Number" class="mt-3"><br>
            <input type="file" name="image" id="" class="mt-3">
            <textarea name="address" id="" cols="30" rows="5" class="mt-3" placeholder="Address"></textarea>
            <input type="password" name="password" placeholder="Set Password" class="mt-3"><br>
            <input type="submit" value="ADD" name="add" class="mt-3">
        </form>
    </div>

</body>

</html>

<?php

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["temp_name'"];
$folder = "images/";
move_uploaded_file($tempname,$folder);
?>