<?php
if(!isset($_GET['id'])){
    header('location:New-agency.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
$qry = "DELETE FROM agency_application WHERE id=$eid";
// echo $qry;
if($conn->query($qry)){
    header("location:New-agency.php?status=ok");
} else {
    header("location:New-agency.php?status=error");
}
?>