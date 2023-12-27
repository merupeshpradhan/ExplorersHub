<?php
if(!isset($_GET['id'])){
    header('location:Owner-Home.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
$qry = "DELETE FROM manager WHERE id=$eid";
// echo $qry;
if($conn->query($qry)){
    header("location:Owner-Home.php?status=ok");
} else {
    header("location:Owner-Home.php?status=error");
}
?>