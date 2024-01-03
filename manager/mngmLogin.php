<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/StartingPage.css">
    <title>Manager Log-in</title>
    <style>
        .containers {
            display: flex;
            justify-content: center;
            min-height: 96vh;
            align-items: center;
            margin-top: -60px;
        }

        .input-fields {
            margin: 38px 0;
            position: relative;
        }
        header{
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    // include_once "Navbar.php";

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
    ?>
    <header>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;margin-top: 0px;">
                    <div class=" ">
                        <?php
                        if (isset($msg)) {
                        ?>
                            <div id="myAlert" class="text-white d-flex justify-content-center align-items-center" style="width:150px;padding: 10px; border-radius: 8px; background-color: green; color: white; text-align: center;" role="alert">
                                <p class="mx-1 text-white"><?php echo $msg; ?></p>

                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        <div class="containers">
            <div class="boxs">
                <div class="box-logins" id="login">
                    <div class="top-headers">
                        <h3>Hello, Again!</h3>
                        <small>We are happy to have you back.</small>
                    </div>
                    <form action="mngmLogin.php" method="post">
                        <div class="input-groups">
                            <div class="input-fields">
                                <input type="text" class="input-boxs" id="logEmail" name="email" required>
                                <label for="logEmail">Email address</label>
                            </div>
                            <div class="input-fields">
                                <input type="password" class="input-boxs" id="logPassword" name="password" required>
                                <label for="logPassword">Password</label>
                                <div class="eye-area">
                                    <div class="eye-box" onclick="myLogPassword()">
                                        <i class="fa-regular fa-eye" id="eye"></i>
                                        <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="remember">
                                <input type="checkbox" id="formCheck" class="check">
                                <label for="formCheck">Remember Me</label>
                            </div>
                            <div class="input-fields">
                                <input type="submit" class="input-submit" value="Sign In" name="login" required>
                            </div>
                            <div class="forgot">
                                <a href="#">Forgot password?</a>
                            </div>

                        </div>
                    </form>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <script>
                    // Hide the alert after 5 seconds
                    setTimeout(function() {
                        var myAlert = document.getElementById('myAlert');
                        myAlert.style.opacity = '0';
                        myAlert.style.visibility = 'hidden';
                    }, 5000);

                    // View Password codes



                    function myLogPassword() {

                        var a = document.getElementById("logPassword");
                        var b = document.getElementById("eye");
                        var c = document.getElementById("eye-slash");

                        if (a.type === "password") {
                            a.type = "text";
                            b.style.opacity = "0";
                            c.style.opacity = "1";
                        } else {
                            a.type = "password";
                            b.style.opacity = "1";
                            c.style.opacity = "0";
                        }

                    }
                </script>
</body>

</html>