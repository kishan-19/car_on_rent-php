    <?php
    include '../db/conn.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:admin-login.php');
    }
    if (isset($_GET['carid'])) {
        $car_id = $_GET['carid'];
        $sql = "DELETE FROM `car` WHERE md5(id) = '$car_id'";
        if ($conn->query($sql) === true) {
            echo "deleted itema";
            header('location:admin-all-cars.php');
        } else {
    ?>
            <script>
                alert("faile to delete itame");
            </script>
    <?php
        }
    }


    include 'admin-header.php';
    include 'admin-navbar.php';
    ?>
    <div>
        <h2 class="d-flex justify-content-center mb-3"><span><i class="fa-solid fa-circle fa-2xs h-2"></i></span>&nbsp Cars List &nbsp<span><i class="fa-solid fa-circle fa-2xs"></i></span></h2>
        <div class="user_table mt-3 cars_list">
            <table class="table table-hover bg-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Fuel</th>
                        <th scope="col">Transmission</th>
                        <th scope="col">Rupees/Day</th>
                        <th scope="col">Image</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `car`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_array()) {
                    ?>
                            <tr>
                                <td class="pt-4"><?php echo $row['id']; ?></td>
                                <td class="pt-4"><?php echo $row['name']; ?></td>
                                <td class="pt-4"><?php echo $row['fuel']; ?></td>
                                <td class="pt-4"><?php echo $row['transmission']; ?></td>
                                <td class="pt-4"><?php echo $row['rupees']; ?></td>
                                <td><img src="./<?php echo $row['img'] ?>" alt="Card image cap" width="110px" height="77px"></td>
                                <td><a href="admin-add-car.php?carid=<?php echo md5($row['id']); ?>"><button type="submit" class="btn btn-outline-info m-2">Edite</button></a>
                                    <a href="admin-all-cars.php?carid=<?php echo md5($row['id']); ?>"><button type="submit" class="btn btn-outline-danger m-2">Delete</button></a>
                                </td>
                            </tr>
                    <?php
                        }
                        $conn->close();
                    } else {
                        echo "<center><P>result is not found</P></center>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <?php include 'admin-footer.php' ?>