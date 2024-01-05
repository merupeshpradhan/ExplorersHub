<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <!-- <style>
        #locImg {
            border-bottom-left-radius: 6px;
            margin-left: -12px;
            border-color: #5a5add;

        }

        @media only screen and (max-width: 576px) {
            #locImg {
                border-radius: 5px;
                margin-top: 10px;
                margin-left: 0px;
            }

        }
    </style> -->
</head>

<body>
    <?php
    include_once "Navbar.php";
    ?>

    <div class="" style="background-color: #e4f1ff; height: 100%;">
        <!-- <div class="location-cards"> -->
        <div class="conatianer p-5">
            <div class="row  ">
                <div class="col mx-auto">
                    <?php
                    require_once "db-connect.php";
                    $location = "SELECT bl.bookingId, bl.location, bl.agencyName, bl.agencyPhn, bl.price, bcd.action
                    FROM booking_list bl
                    INNER JOIN booking_confirmation_details bcd ON bl.bookingId = bcd.bookingId";
                    ;
                    $res1 = $conn->query($location);
                    
                    while ($loc = $res1->fetch_assoc()) {
                    ?>
                        <div class="mb-3 col-lg-7 card fw-bold" style="max-width: 550px; border: 2px solid #5a5add; background-color: #8aafd6; font-family: 'Courier New', Courier, monospace;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/jagarnath.jpeg" class="img-fluid" id="locImg" alt="location">
                                </div>
                                <div class="col-md-5 ">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $loc['location']; ?></h5>
                                        <p class="card-text">Price : <?php echo $loc['price']; ?> </p>
                                        <p class="card-text"><?php echo ($loc['action'] === "accept"? "Accepted" : "Cancelled"); ?> </p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-5">
                    <div class="bg-danger" style="height: 85rem;"></div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <?php



    $conn->close();

    ?>
</body>

</html>