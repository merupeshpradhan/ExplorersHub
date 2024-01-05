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

    $qry = "UPDATE location set name='$name', street='$street',district='$district', state='$state', pincode='$pincode', price='$price' WHERE id='$id'";

    if ($conn->query($qry)) {
        header("location:location.php?update=ok?id=<?php echo $id ?>");
    } else {
        header("location:location.php?update=error");
    }
}
?>