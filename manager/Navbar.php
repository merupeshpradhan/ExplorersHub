<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <!-- <link rel="stylesheet" href="../style/login.css"> -->
    <style>
        .profile-popup {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            width: 40%;
            display: none;
            position: fixed;
            top: 21%;
            left: 65%;
            transform: translate(-60%, -48%);
            padding: 20px;
            background-color: #f1e8ff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgb(0 0 255 / 30%);
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
    <nav class="navbar navbar-expand-lg navbarbg " data-bs-theme="dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">PIPERS TRAVELARS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  fs-5"><a class="nav-link text-white" href="managment-Home.php">Home</a></li>
                    <li class="nav-item fs-5"><a class="nav-link text-white" href="Add-location.php">Add New Location</a></li>
                    <li class="nav-item fs-5"><a class="nav-link text-white" href="New-agency.php">Agency Request's</a></li>
                    <li class="nav-item fs-5"><a class="nav-link text-white" href="#profilePopup">Profile</a></li>
                    <li class="nav-item fs-5"><a class="nav-link text-white" href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="profilePopup" class="profile-popup">
        <span class="close-btn"><a href="#"><i class="bi bi-x-circle"></i></a></span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>