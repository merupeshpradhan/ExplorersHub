<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #bg {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }
    ?>

    <body class="text-white mt-0" id="bg" data-bs-spy="scroll" data-bs-target="#navScroll">

        <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
            <div class="container">
                <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index.html">
                    <span class="ms-md-1 mt-1 fw-bolder me-md-5">Explorers HUB</span>
                </a>

                <?php if (isset($_SESSION['loggedInStatus'])): ?>
                    <a href="index.php" class="btn btn-primary">Home Page</a>
                    <a href="dashboard.php" class="btn btn-secondary">Dashboard</a>
                    <a href="availlocation.php" class="btn btn-secondary">Check Availability</a>
                    <a href="logout.php" class="btn btn-danger">Logout</a>

                <?php else: ?>

                    <a href="loginRegister.php" class="btn btn-primary">Login</a>
                    <a href="register.php" class="btn btn-info">Register</a>

                <?php endif; ?>
            </div>
        </nav>
    </body>

</html>