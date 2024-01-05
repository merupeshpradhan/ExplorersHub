<?php
$HOSTNAME = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "explorers_hub";

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}
// echo "Connection successful";

?>