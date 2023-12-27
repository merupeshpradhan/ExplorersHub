<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r5ce1ouINBRzl5H9+KJ8Uj/sWU8U5+A1g8dKAEZ9TL6vFwqJ8q8P/Tr5qQ5tZ5G2" crossorigin="anonymous">
    <title>Dynamic Cards</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">

            <?php
            require_once "db-connect.php";
            $sql = "SELECT * FROM location";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop through the records and generate cards
                while ($row = $result->fetch_assoc()) {
                    generateCard($row);
                }
            } else {
                echo "No records found";
            }

            // Close the database connection
            $conn->close();

            // Function to generate a card
            function generateCard($data)
            {
                echo '<div class="col">
                    <div class="card h-100">
                        <img src="../images/jagarnath.jpeg' . $data["name"] . '" class="card-img-top" alt="beautiful place">
                        <div class="card-body">
                            <h5 class="card-title">' . $data["name"] . '</h5>
                            <div class="card-text">
                                <p><b>Duration</b> : ' . $data["name"] . '</p>
                                <i class="bi bi-currency-rupee"></i>' . $data["name"] . '
                            </div>
                            <br>
                            <a href="#" class="card-link">Show Details</a>
                            <a href="#" class="btn btn-primary ms-4">Book Now</a>
                        </div>
                    </div>
                </div>';
            }
            ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-SFn1lS+bgBeu8wZMYI87h3f/63pv1lfz5e5nsCczc5o" crossorigin="anonymous"></script>
</body>

</html>