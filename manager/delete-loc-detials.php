<?php
if(!isset($_GET['id'])){
    header('location:location.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
$qry = "DELETE FROM location WHERE id=$eid";
// echo $qry;
if($conn->query($qry)){
    header("location:managment-Home.php?status=ok");
} else {
    header("location:managment-Home.php?status=error");
}
?>