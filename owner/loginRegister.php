<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Explorers Hub</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <a href="#" class="nav_logo">Explorers Hub</a>
      <button class="button" id="form-open">Login</button>
    </nav>
  </header>

  <!-- Home -->
  <section class="home">
    <div class="form_container">
      <i class="uil uil-times form_close"></i>
      <!-- Login From -->
      <div class="form login_form">
        <form action="login-code.php" method="post">
          <h2>Login</h2>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" name="email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <input type="password" placeholder="Enter your password" name="password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check" />
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button class="button" type="submit" name="loginBtn">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="loginRegister.php" id="signup">Signup</a></div>
        </form>
      </div>
      <!-- Signup From -->
      <div class="form signup_form">
        <form action="register-code.php" method="post">
          <h2>Signup</h2>

          <div class="input_box">
            <i class="uil uil-grin name"></i>
            <input type="text" placeholder="Enter Name" name="name" required />
          </div>
          <div class="input_box">
            <input type="email" placeholder="Enter your email" name="email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input_box">
            <i class="uil uil-phone-alt phone"></i>
            <input type="number" placeholder="Enter Mobile Number" name="phone" required />
          </div>
          <div class="input_box">
            <input type="password" placeholder="Create password" name="password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <button class="button" type="submit" name="registerBtn">Signup Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>