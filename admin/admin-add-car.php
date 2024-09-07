<?php
include '../db/conn.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location:admin-login.php');
}

// add car in car list
if (isset($_POST['add_car'])) {
    $carName = $_POST['carName'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $img = $_FILES['img'];

    $file = $img['name'];
    $error = $img['error'];
    $filetmp = $img['tmp_name'];

    $exploed = explode('.', $file);
    $extention = strtolower(end($exploed));

    $filetype = array('png', 'jpg', 'jpeg', 'webp');

    if (in_array($extention, $filetype)) {
        $destination = 'uplodeimg/' . $file;
        move_uploaded_file($filetmp, $destination);

        $sql = "INSERT INTO car(name, fuel, transmission, rupees, img) VALUES ('$carName','$fuel','$transmission','$price','$destination')";

        if ($conn->query($sql) == true) {
            $conn->close();
?>
            <script>
                alert("New Car Add Successfuly");
            </script>
            <script>
                window.location = "./admin-add-car.php";
            </script>
        <?php

        } else {
        ?>
            <script>
                alert("Car cannot be inserted in car list");
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("image is not proper,please try again");
        </script>
        <?php
    }
}

// get edit car information
$c_name = null;
$c_fuel = null;
$c_transmission = null;
$c_rupees = null;
$c_img = null;
$car_id = null;
if (isset($_GET['carid'])) {
    $car_id = $_GET['carid'];
    $sql = "SELECT * FROM `car` WHERE md5(id) = '$car_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $c_name = $row["name"];
            $c_fuel = $row["fuel"];
            $c_transmission = $row["transmission"];
            $c_rupees = $row["rupees"];
            $c_img = $row["img"];
        }
    } else {
        echo "<center><P>result is not found</P></center>";
    }
}

//Edit car Informacion
if (isset($_POST['edite_car'])) {
    $carName = $_POST['carName'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $arr= $_FILES['img'];
    $file = $arr['name'];

    $sql = "";
    $destination = "";
    $sql .= "UPDATE `car` SET `name`='$carName',`fuel`='$fuel',`transmission`='$transmission',`rupees`='$price',";
    if ($file) {
        $img = $_FILES['img'];
        $file = $img['name'];
        $error = $img['error'];
        $filetmp = $img['tmp_name'];

        $exploed = explode('.', $file);
        $extention = strtolower(end($exploed));
        $filetype = array('png', 'jpg', 'jpeg', 'webp');

        if (in_array($extention, $filetype)) {
            $destination .= 'uplodeimg/' . $file;
            move_uploaded_file($filetmp, $destination);

            // $sql +="UPDATE `car` SET `name`='$carName',`fuel`='$fuel',`transmission`='$transmission',`rupees`='$price',`img`='$destination' WHERE md5(id) = '$car_id'";
            $sql .= "`img`='$destination',";
        } else {
        ?>
            <script>
                alert("image is not proper,please try again");
            </script>
        <?php
        }
    }
    $sql .= "`rupees`='$price' WHERE md5(id) = '$car_id'";
    if ($conn->query($sql)) {
        $conn->close();
        ?>
        <script>
            alert("Edited Car Data Successfuly");
        </script>
        <script>
            window.location = "./admin-all-cars.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Ooppss Cannot Edited car");
        </script>
<?php
    }
}
include 'admin-header.php';
include 'admin-navbar.php';
?>
<div class="d-flex justify-content-center align-items-center flex-column bg-light">
    <h2 class="mt-3"><span><i class="fa-solid fa-circle fa-2xs h-2"></i></span>&nbsp Add Another One Car In Car List &nbsp<span><i class="fa-solid fa-circle fa-2xs h-2"></i></span></h2>
    <form class="mt-3 car_add_form" method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="carName" class="form-label">Car Name :</label>
            <input type="text" class="form-control" name="carName" id="carName" required value="<?php if ($c_name) echo $c_name; ?>">
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="fuel" class="form-label">Fuel :</label>
                <select id="fuel" name="fuel" class="form-select" required>
                    <option value="">Please select</option>
                    <option value="Diesel" <?php if ($c_fuel == 'Diesel') echo 'selected' ?>>Diesel</option>
                    <option value="Petrol" <?php if ($c_fuel == 'Petrol') echo 'selected' ?>>Petrol</option>
                    <option value="CNG" <?php if ($c_fuel == 'CNG') echo 'selected' ?>>CNG</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="transmission" class="form-label">Transmission :</label>
                <select id="transmission" name="transmission" class="form-select" required value="df">
                    <option>Please select</option>
                    <option value="Manual" <?php if ($c_transmission == 'Manual') echo 'selected' ?>>Manual</option>
                    <option value="Automatic" <?php if ($c_transmission == 'Automatic') echo 'selected' ?>>Automatic</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Select Image :</label>
            <input type="file" class="form-control" id="img" name="img" <?php if (!$c_img) echo 'required' ?>>
            <!-- <span class="text-danger" required>--220px * 220px</span> -->
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="price" class="form-label">Car Price/Day :</label>
                <input type="number" class="form-control" name="price" id="price" required value="<?php if ($c_rupees) echo $c_rupees; ?>">
            </div>
            <div class="col-md-6 col-sm-10 mb-3">
            </div>
        </div>
        <div class="mb-3 btn_add_car">
            <?php
            if (!$car_id) {
            ?>
                <button type="submit" class="btn w-100" name="add_car">Add Car</button>
            <?php
            } else {
            ?>
                <button type="submit" class="btn w-100" name="edite_car">Edit Car</button>
            <?php
            }
            ?>
        </div>
    </form>
</div>

<?php include 'admin-footer.php' ?>