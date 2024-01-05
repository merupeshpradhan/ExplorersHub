
<?php
if (isset($_POST['updateManager'])) {
    require_once "db-connect.php";
    $eid = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $qry = "UPDATE manager set name='$name', gender='$gender',dob='$dob', address='$address', mobile='$mobile', email='$email' WHERE id='$eid'";

    if ($conn->query($qry)) {
        header("location:manager-detials.php?update=ok?id=<?php echo $eid ?>");
    } else {
        header("location:manager-detials.php?update=error");
    }
}
?>
