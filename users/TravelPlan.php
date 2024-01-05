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

<body style="background-color: #ac84e35c;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <?php
    include_once "Navbar.php";
    ?>

    <div class="" style="height: 100%;">
        <!-- <div class="location-cards"> -->
        <div class="conatianer p-5">
            <div class="row  ">
                <div class="col mx-auto" style="display: flex;flex-direction: column;">
                    <?php
                    require_once "db-connect.php";
                    $location = "SELECT * FROM booking_confirmation";
                    $res1 = $conn->query($location);

                    while ($loc = $res1->fetch_assoc()) {
                    ?>
                        <div class="mb-3 col-lg-7 card rounded-0 fw-bold" style="max-width: 550px;border: 1px solid #327a81;  background-color: #f1e8ff; font-family: 'Courier New', Courier, monospace;box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);margin-left: 30px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/jagarnath.jpeg" class="img-fluid" id="locImg" alt="location">
                                </div>
                                <div class="col-md-5 ">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $loc['location']; ?></h5>
                                        <p class="card-text">Price : <?php echo $loc['price']; ?> </p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-5">
                    <div class="" style="height: 40%;border-radius: 20px ;border: 1px solid #327a81;  background-color: #f1e8ff; font-family: 'Courier New', Courier, monospace;box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);"></div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <?php



    $conn->close();

    ?>
    <?php include_once "footer.php"; ?>
    
</body>

</html>