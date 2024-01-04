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
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <!-- <?php
    // if (isset($_SESSION['message'])) {
    //     echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
    //     unset($_SESSION['message']);
    // }
    ?> -->

    <body class="text-white mt-0" id="bg" data-bs-spy="scroll" data-bs-target="#navScroll">

        <nav class="navbar navbar-expand-lg navbarbg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Explorers HUB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php if (isset($_SESSION['loggedInStatus'])): ?>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="dashboard.php">Dashboard</a></li>
                            <li><a class="nav-link text-white" href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                <?php else: ?>

                    <a class="nav-link text-white fs-4" href="loginRegister.php">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </body>

</html>