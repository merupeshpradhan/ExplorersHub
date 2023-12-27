<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Connect</title>
    <link rel="stylesheet" href="../style/StartingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="d-flex">
            <div class="logo ms-4">
                Explorers Hub
            </div>
            <div class="btns me-4">
                <a href="#">New Agency</a>
            </div>
        </nav>
        <?php
                // include_once "Navbar.php";

                if (isset($_POST['login'])) {
                    require_once "db-connect.php";
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $qry = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
                    $no = mysqli_num_rows($qry);
                    if ($no > 0) {
                        $own = mysqli_fetch_assoc($qry);
                        if ($own['email'] == $email) {
                            $msg = "Login Succsefully";
                            header("location:managment-Home.php");
                        } else {
                            $msg = "Invalid Password.";
                        }
                    } else {
                        $msg = "Invalid Email.";
                    }
                }
                // if (isset($msg)) {
                //    echo $msg;
                // }
                if (isset($_POST['register'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $password = $_POST['password'];
                    require_once "db-connect.php";

                    $qry = "INSERT INTO users (name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";

                    if ($conn->query($qry)) {
                        $msg = "You Registered Succsefully ";
                    } else {
                        echo $conn->error;
                    }
                }
                // if (isset($msg)) {
                //    echo $msg;
                // }
                // 
                ?>
        <div class=" bg-warning d-flex justify-content-center align-items-center" style="height: 50px">
                    <div class=" ">
                        <?php
                        if (isset($msg)) {
                        ?>
                            <div id="myAlert" class="alert alert-success alert-dismissible fade show d-flex justify-content-center " style="width:250px; height: 50px;" role="alert">
                                <p ><?php echo $msg; ?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        <div class="sub-body row container mx-auto">
            <div class="information col">
                <h1 class="text-center text-white">Information</h1>
            </div>
            <div class="logReg col">
                
                <div class="containers">

                    <div class="boxs">

                        <div class="box-logins" id="login">
                            <div class="top-headers">
                                <h3>Hello, Again!</h3>
                                <small>We are happy to have you back.</small>
                            </div>
                            <form action="Starting-page.php" method="post">
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

                        <!---------------------------- register --------------------------------------->

                        <div class="box-registers" id="register">
                            <div class="top-header">
                                <h3>Sign Up, Now!</h3>
                                <small>We are happy to have you with us.</small>
                            </div>
                            <form action="Starting-page.php" method="post">
                                <div class="input-groups">
                                    <div class="input-fields">
                                        <input type="text" class="input-boxs" id="regUsername" name="name" required>
                                        <label for="regUsername">Username</label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" class="input-boxs" id="regMobile" name="mobile" required>
                                        <label for="regMobile">MObile</label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="text" class="input-boxs" id="regEmail" name="email" required>
                                        <label for="regEmail">Email address</label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="password" class="input-boxs" id="regPassword" name="password" required>
                                        <label for="regPassword">Password</label>
                                        <div class="eye-area">
                                            <div class="eye-box" onclick="myRegPassword()">
                                                <i class="fa-regular fa-eye" id="eye-2"></i>
                                                <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="remember">
                                        <input type="checkbox" id="formCheck2" class="check">
                                        <label for="formCheck2">Remember Me</label>
                                    </div>
                                    <div class="input-fields">
                                        <input type="submit" class="input-submit" value="Sign Up" name="register" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="switch">
                            <a href="#" class="login active" onclick="login()">Login</a>
                            <a href="#" class="register" onclick="register()">Register</a>
                            <div class="btn-active" id="btn"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function login() {
            x.style.left = "27px";
            y.style.right = "-350px";
            z.style.left = "0px";
        }

        function register() {
            x.style.left = "-350px";
            y.style.right = "25px";
            z.style.left = "150px";
        }

        // Hide the alert after 5 seconds
        // setTimeout(function() {
        //     var myAlert = document.getElementById('myAlert');
        //     myAlert.style.opacity = '0';
        //     myAlert.style.visibility = 'hidden';
        // }, 5000);

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

        function myRegPassword() {

            var d = document.getElementById("regPassword");
            var b = document.getElementById("eye-2");
            var c = document.getElementById("eye-slash-2");

            if (d.type === "password") {
                d.type = "text";
                b.style.opacity = "0";
                c.style.opacity = "1";
            } else {
                d.type = "password";
                b.style.opacity = "1";
                c.style.opacity = "0";
            }

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>

</html>