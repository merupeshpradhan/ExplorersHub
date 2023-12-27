<?php

$HOSTNAME = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "explorers_hub";

try {
    $conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
    if ($conn->connect_error) {
        echo "connection Error" . $conn->connect_error;
    } else {
        // echo "Connection Successful";
    }
} catch (Exception $e) {
    echo $e->getMessage() . " at line " . $e->getLine();
}
?>