<?php
if(isset($_POST['update'])){
    require_once 'dbcon.php';

    $id = $_POST['id'];
    $loc = $_POST['loc'];
    $avail = $_POST['avail'];
    $price = $_POST['price'];


    $qry = "UPDATE agency set loc='$loc',
    avail='$avail',price='$price'where id=$id";

    if($conn->query($qry)){
        header("location:dashboard.php?update=ok");
    }else{
        header("location:dashboard.php?update=error");
    }
}
?>