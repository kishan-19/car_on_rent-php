<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:admin-login.php');
}
include './admin-header.php';
include './admin-navbar.php'
?>
<div>
    <h2 class="d-flex justify-content-center mb-3"><span><i class="fa-solid fa-circle fa-2xs h-2"></i></span>&nbsp Booking List &nbsp<span><i class="fa-solid fa-circle fa-2xs"></i></span></h2>
    <div class="user_table mt-3 booking_list_table">
        <table class="table table-hover bg-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">IsAdmin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../db/conn.php';
                $sql = "SELECT * FROM `user list`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>*****</td>
                            <?php
                            if ($row['isadmin']) {
                            ?>
                                <td>True</td>
                            <?php
                            } else {
                            ?>
                                <td>False</td>
                            <?php
                            }
                            ?>
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
<?php
include './admin-footer.php';
?>