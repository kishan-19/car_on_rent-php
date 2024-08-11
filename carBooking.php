<?php
        $car_name = $_GET['name'];
        $price = $_GET['p'];
if (isset($_POST['booking'])) {
    $pickup = $_POST['pickup'];
    $pickupTime = $_POST['pickupTime'];
    $dropoff = $_POST['dropoff'];
    $dropoffTime = $_POST['dropoffTime'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    include './db/conn.php';

    $sql = "INSERT INTO `booking list`(`car_name`, `pickup`, `pickup_time`, `dropoff`, `dropoff_time`, `c_name`, `email`, `phone`) VALUES ('$car_name','$pickup','$pickupTime','$dropoff','$dropoffTime','$name','$email','$number')";
    if ($conn->query($sql) == true) {
        $conn->close();
?>
        <script>
            alert("Car Booking Successfully");
        </script>
        <script>
            window.location = "./index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            window.location = "./404.php";
        </script>

    <?php
    }
 } 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car rents/booking</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid header filerBrighness">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="form_border">
                <h1>Book Your Car Today!</h1>
                <form class="mt-3 car_booking_form" style="width: 450px;" method="Post">
                    <div class="mb-3">
                        <!-- <label for="carName" class="form-label">Car Name</label> -->
                        <input type="text" name="carName" class="form-control" id="carName" value="<?php echo $car_name; ?>" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-10 mb-3">
                            <!-- <label for="pickup" class="form-label">Pickup Point</label> -->
                            <select id="pickup" class="form-select" name="pickup" required>
                                <option value="">Pickup Point</option>
                                <option value="rajkot">Rajkot</option>
                                <option value="Rajkot Air port">Rajkot Air port</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Morbi">Morbi</option>
                                <option value="Jamnager">Jamnager</option>
                                <option value="Rajkot Bus Stand">Rajkot Bus Stand</option>
                                <option value="Surat">Surat</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-10 mb-3">
                            <!-- <label for="pDateTime" class="form-label">Date And Time</label> -->
                            <input type="datetime-local" name="pickupTime" class="form-control" min='' id="pDateTime" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-10 mb-3">
                            <!-- <label for="dropOff" class="form-label">Drop Off Point</label> -->
                            <select id="dropOff" class="form-select" name="dropoff" required>
                                <option value="">Drop Off Point</option>
                                <option value="rajkot">Rajkot</option>
                                <option value="Rajkot Air port">Rajkot Air port</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Morbi">Morbi</option>
                                <option value="Jamnager">Jamnager</option>
                                <option value="Rajkot Bus Stand">Rajkot Bus Stand</option>
                                <option value="Surat">Surat</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-10 mb-3">
                            <!-- <label for="dDateTime" class="form-label">Date And Time</label> -->
                            <input type="datetime-local" class="form-control" name="dropoffTime" id="dDateTime" placeholder="date" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="name" class="form-label">Your Name</label> -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="email" class="form-label">EmailAddress</label> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="number" class="form-label">Phone Number</label> -->
                        <input type="number" class="form-control" id="number" name="number" maxlength="10" minlength="10" placeholder="Phone Number" required>
                    </div>

                    <!-- <div class="form-group row">
                        <div class="col-md-3 col-sm-2">
                            <input type="number" class="form-control" id="price" value="20000" disabled>
                        </div>
                        <label for="price" class="col-sm-2 col-form-label text-primary ps-0">$Price</label>
                    </div> -->
                    <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                    <button type="submit" class="btn btn-primary mt-2" name="booking">Submit</button>
                </form>
            </div>
        </div>

    </div>
        <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>