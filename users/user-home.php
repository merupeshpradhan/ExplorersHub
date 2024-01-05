<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php include_once "Navbar.php"; ?>
    <div class="banner">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../images/baner1.jpg" style="height: 20rem;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../images/baner2.jpg" style="height: 20rem;" width="40px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/baner3.jpg" style="height: 20rem;" width="40px" class="d-block  w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <div class="location-cards" >
        <div class="conatianer py-5 px-5">
            <div class="row mt-4">
                <?php
                require_once "db-connect.php";
                $qry = "SELECT * FROM location";
                $res = $conn->query($qry);

                while ($loc = $res->fetch_assoc()) {
                ?>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="background-color: #f1e8ff;border: 1px solid #327a81;">
                            <img src="../manager/<?php echo $loc['img']; ?>" alt="location Image" height="250px" style="border-radius: 4px 4px 0px 0px;">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $loc['name']; ?></h2>
                                <p class="card-text">Location : <?php echo $loc['state']; ?></p>
                                <p class="card-text">Price : <?php echo $loc['price']; ?></p>
                                <a href="Add-booking.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Book Now</a>
                                <a href="locationUpdate.php?id=<?php echo $loc['id'] ?>" class="btn btn-sm btn-outline-success p-1">Detials</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include_once "footer.php"; ?>
</body>

</html>