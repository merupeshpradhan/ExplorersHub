<?php
session_start();

session_destroy();
header('Location: loginRegister.php');
exit();

?>