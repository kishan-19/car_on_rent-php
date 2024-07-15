<?php
include 'admin-header.php';
include 'admin-navbar.php';
?>
<div>
    <h2 class="d-flex justify-content-center mb-3"><span><i class="fa-solid fa-circle fa-2xs h-2"></i></span>&nbsp Booking List &nbsp<span><i class="fa-solid fa-circle fa-2xs"></i></span></h2>
    <div class="user_table mt-3 booking_list_table">
        <table class="table table-hover bg-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Car</th>
                    <th scope="col">pickUp</th>
                    <th scope="col">PickUp Time</th>
                    <th scope="col">DropOff</th>
                    <th scope="col">DropOf Time</th>
                    <th scope="col">Custome Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone N</th>
                    <th scope="col">Booking Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../db/conn.php';
                $sql = "SELECT * FROM `booking list`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['car_name']; ?></td>
                            <td><?php echo $row['pickup']; ?></td>
                            <td><?php echo $row['pickup_time']; ?></td>
                            <td><?php echo $row['dropoff']; ?></td>
                            <td><?php echo $row['dropoff_time']; ?></td>
                            <td><?php echo $row['c_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['book_date']; ?></td>
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
<?php include 'admin-footer.php'; ?>