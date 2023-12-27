<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Register</title>
</head>

<body>
    <?php
    include_once "OwnerNav.php";

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        require_once "db-connect.php";

        $qry = "INSERT INTO owner (name,gender,email,mobile,password) VALUES('$name','$gender','$email','$mobile','$password')";

        if ($conn->query($qry)) {
            $msg = "You Registered Succsefully ";
        } else {
            echo $conn->error;
        }
    }
    if (isset($msg)) {
        echo $msg;
    }
    ?>
    <div class="container border w-25 text-center ">
        <h1>Owner Registration</h1>
        <form action="Owner-register.php" method="post" class="my-3">
            <input type="text" name="name" placeholder="Full Name"><br>
            <label for="gender" class="mt-3">Gender :</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <input type="email" name="email" placeholder="Email" class="mt-3"><br>
            <input type="number" name="mobile" placeholder="Phone Number" class="mt-3"><br>
            <input type="password" name="password" placeholder="New Password" class="mt-3"><br>
            <input type="password" placeholder="Conform Password" class="mt-3"><br>
            <input type="submit" value="Register" name="register" class="mt-3">
        </form>
    </div>
</body>

</html>