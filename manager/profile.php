<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #333;
      color: white;
      padding: 15px;
      text-align: right;
    }

    .profile-popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }

    :target {
      display: block;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<nav>
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#profilePopup">Profile</a>
</nav>

<div id="profilePopup" class="profile-popup">
  <span class="close-btn"><a href="#">Close</a></span>
  <h2>User Profile</h2>
  <?php
    // PHP code to fetch user details from the server/database
    $username = "John Doe";
    $email = "john@example.com";

    echo "<p>Name: $username</p>";
    echo "<p>Email: $email</p>";
    // Add more user details as needed
  ?>
</div>

</body>
</html>
