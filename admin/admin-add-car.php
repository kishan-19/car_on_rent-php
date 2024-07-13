<?php
        include '../db/conn.php';
if (isset($_POST['add_car'])) {
    $carName = $_POST['carName'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $img = $_FILES['img'];
    $price = $_POST['price'];

    $file = $img['name'];
    $error = $img['error'];
    $filetmp = $img['tmp_name'];

    $exploed = explode('.', $file);
    $extention = strtolower(end($exploed));
    
    $filetype = array('png','jpg','jpeg','webp');

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
            <script>window.location="./admin-add-car.php";</script>
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
include 'admin-header.php';
include 'admin-navbar.php';
?>
<div class="d-flex justify-content-center align-items-center flex-column bg-light">
    <h2 class="mt-3">Add Another One Car In Car List</h2>
    <form class="mt-3 car_add_form"  method="Post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="carName" class="form-label">Car Name :</label>
            <input type="text" class="form-control" name="carName" id="carName" required>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="fuel" class="form-label">Fuel :</label>
                <select id="fuel" name="fuel" class="form-select" required>
                    <option>Please select</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Petrol">Petrol</option>
                    <option value="CNG">CNG</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="transmission" class="form-label">Transmission :</label>
                <select id="transmission" name="transmission" class="form-select" required>
                    <option>Please select</option>
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Select Image :</label>
            <input type="file" class="form-control" id="img" name="img" required>
            <!-- <span class="text-danger" required>--220px * 220px</span> -->
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-10 mb-3">
                <label for="price" class="form-label">Car Price/Day :</label>
                <input type="number" class="form-control" name="price" id="price" required>
            </div>
            <div class="col-md-6 col-sm-10 mb-3">
            </div>
        </div>
        <div class="mb-3 btn_add_car">
            <button type="submit" class="btn w-100" name="add_car">Add Car</button>
        </div>
    </form>
</div>

<?php include 'admin-footer.php' ?>