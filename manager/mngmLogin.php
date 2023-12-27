<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Log-in</title>
</head>

<body>
    <?php
    include_once "Navbar.php";

    if (isset($_POST['login'])) {
        require_once "db-connect.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = mysqli_query($conn, "SELECT * FROM manager WHERE email='$email' AND password='$password'");
        $no = mysqli_num_rows($qry);
        if ($no > 0) {
            $own = mysqli_fetch_assoc($qry);
            if ($own['email'] == $email) {
                echo "Login Succsefully";
                header("location:managment-Home.php");
            } else {
                $msg = "Invalid Password.";
            }
        } else {
            $msg = "Invalid Email.";
        }
    }
    if (isset($msg)) {
        echo $msg;
    }

    ?>
    <div class="box bgcolor d-flex align-items-center justify-content-center">
        <div class="container border w-25 ">
            <h1 class="text-center mb-4">Manager Log-In</h1>
            <form action="mngmLogin.php" method="post" class="row rounded g-3 needs-validation p-3">
                <div class="col-md-10 position-relative align-items-center">
                    <label for="validationTooltip01" class="form-label">Email</label>
                    <input type="email" name="email" placeholder="abc@gmail.com" id="validationTooltip01" class="form-control" required><br>
                </div>
                <div class="col-md-10 position-relative">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="********" id="pass" class="form-control"><br>
                </div>
                <div class="col-12 ">
                    <button class="mybtn" style="color: white; padding: 7px;" type="submit" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include_once "footer.php"
    ?>
</body>

</html>