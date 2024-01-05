<?php
if(!isset($_GET['id'])){
    header('location:New-agency.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
$qry = "DELETE FROM agency_lists WHERE id=$eid";
// echo $qry;
if($conn->query($qry)){
    header("location:managment-Home.php?status=ok");
} else {
    header("location:managment-Home.php?status=error");
}
?>