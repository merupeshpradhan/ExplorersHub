<?php
session_start();

require_once "db-connect.php";

if(isset($_POST['registerBtn']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $errors = [];

    if($name == '' OR $phone == '' OR $email == '' OR $password == ''){
        array_push($errors, "All fields are required");
    }

    if($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Enter valid email address");
    }

    if($email != ''){
        $userCheck = mysqli_query($conn, "SELECT email FROM owner WHERE email='$email'");
        if($userCheck){
            if(mysqli_num_rows($userCheck) > 0){
                array_push($errors, "Email already registered");
            }
        }else{
            array_push($errors, "Something Went Wrong!");
        }
    }

    if(count($errors) > 0){
        $_SESSION['errors'] = $errors;
        header('Location: loginregister.php');
        exit();
    }

    $query = "INSERT INTO owner (name,gender,mobile,email,password) VALUES ('$name','$gender','$mobile','$email','$password')";
    $userResult = mysqli_query($conn, $query);

    if($userResult){
        $_SESSION['message'] = "Registered Successfully";
        header('Location: Owner-Home.php');
        exit();
    }else{
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: loginRegister.php');
        exit();
    }

}

?>