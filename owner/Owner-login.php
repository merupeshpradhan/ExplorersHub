<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Log-in</title>
</head>

<body>
    <?php
    include_once "OwnerNav.php";
    if (isset($_POST['login'])) {
        require_once "db-connect.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = mysqli_query($conn, "SELECT * FROM owner WHERE email='$email' AND password='$password'");
        $no = mysqli_num_rows($qry);
        if ($no > 0) {
            $own = mysqli_fetch_assoc($qry);
            if ($own['email'] == $email) {
                echo "Login Succsefully";
                header("location:Owner-Home.php");
            } else {
                // echo $conn->error;
                // $msg = "Invalid Email.";
                echo "Invalid Password.";
                
            }
        } else {
            // echo $conn->error;
            // $msg = "Invalid Password.";
            echo "Invalid Email.";
        }
    }
    // echo $msg;
    ?>
    <div class="container border w-25 text-center">
        <h1>Owner Log-In</h1>
        <form action="Owner-login.php" method="post" class="my-3">
            <input type="email" name="email" placeholder="Email" class="mt-3"><br>
            <input type="password" name="password" placeholder="Password" class="mt-3"><br>
            <input type="submit" value="Login" name="login" class="mt-3">
        </form>
    </div>
</body>

</html>