<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Manager Detials</title>
</head>

<body>
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
    <div class="container border w-25 ">
        <h1>UPDATE DETIALS</h1>
        <form action="update-detials.php" method="post" class="my-3">
            <input type="hidden" name="id" value="<?php echo $sid['id'] ?>">
            <input type="text" name="name" placeholder="Full Name" value="<?php echo $sid['name']?>"><br>
            <label for="gender" class="mt-3">Gender :</label>
            <input type="radio" name="gender" value="Male" <?php $sid['gender'] === "Male" ? print "checked" : "" ?>>Male
            <input type="radio" name="gender" value="Female" <?php $sid['gender'] === "Female" ? print "checked" : "" ?>>Female<br>
            <label for="dob" class="mt-3">DOB </label>
            <input type="date" name="dob" id="" value="<?php echo $sid['dob']?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo $sid['email']?>" class="mt-3"><br>
            <input type="hidden" name="position" placeholder="Positin" value="manager" class="mt-3">
            <input type="number" name="mobile" placeholder="Phone Number" class="mt-3" value="<?php echo $sid['mobile']?>"><br>
            <textarea name="address" id="" cols="30" rows="5" class="mt-3" placeholder="Address" ><?php echo $sid['address'] ?></textarea>
            <input type="password" name="password" placeholder="Set Password" class="mt-3" value="<?php echo $sid['password']?>"><br>
            <input type="submit" value="ADD" name="updateManager" class="mt-3">
        </form>
    </div>
</body>

</html>