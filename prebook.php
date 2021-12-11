<?php
include_once("connect.php");

$outText = "";

if (isset($_POST['Prebook'])) {

    $serviceDate = $_POST['serviceDate'];
    $serviceTime = $_POST['serviceTime'];
    $client = $_POST['client'];
    $service = $_POST['service'];

    
    $sql = "INSERT INTO orders(client,order_date,order_time,service)VALUES('$client','$serviceDate','$serviceTime','$service')";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result) {
            echo "<script>alert('Booking Successful')</script>";
        } else {
            echo "<script>alert('<p color: Red>Booking Failed</p>')</script>";
        }
                                
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Prebook Form</title>
</head>
<body>
    <section id="registerBox">
    <div class="container">
        <div class="header">
            <h1>Welcome to Hair Studio </h1>
            <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
            <p>Make Bookings</p>
        </div>

        <form method="POST" action="prebook.php">
            <div class="form-menu">
                <div class="form-control">
                    <label for="first name">Date</label>
                    <input style="color: black" type="date" name="serviceDate" id="">
                </div>

                <div class="form-control">
                    <label for="first name">Time</label>
                    <input style="color: black" type="time" name="serviceTime" id="">
                </div>

                <div class="form-control">
                    <label for="first name"></label>
                    <select style="color:black"  class="form-control" name="service">
                        <option>Hair Styling ZMW 50</option>
                        <option>Beard Trim ZMW 20</option>
                        <option>Hair Cut ZMW 40</option>
                        <option>Dry Shampoo ZMW 25</option>
                    </select>
                </div>

                <div class="form-control">
                    <label for="first name">Full Names</label>
                    <input style="color: black" type="text" name="client" id="">
                </div>

            </div>

            <div class="btn">
                <input type="submit" value="Book" name="Prebook" class="regSubmit">
                <small><a href="index.php">BACK</a></small>
            </div>
            
        </form>
    </div>

    </section>
    
</body>
</html>