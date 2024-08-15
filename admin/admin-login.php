<?php
session_start();
if (isset($_POST['alogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include "../db/conn.php";
    $sql = "SELECT `username`,`email`, `password`,`isadmin` FROM `user list`";
    $result = $conn->query($sql);
    $match = false;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            if ($row['email'] == $email && $row['password'] == $password && $row['isadmin']==true) {
                $match = true;
                $_SESSION['username']=$row['username'];
                header('location:index.php');
            }
        }
        if ($match == false) {
            ?>
            <script>
                alert('invalid credentials');
            </script>
            <?php
        }
    }
}
include './admin-header.php';
?>
<body class="login_bg">
            <div class="login_form">
        <form method="POST" action="admin-login.php">
            <table class="login_form" cellspacing="10px">
                <tr>
                    <th colspan="2">
                        <h1>Admin Login Here</h1>
                    </th>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Enter your password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn_login" name="alogin">Login</button></td>
                </tr>
            </table>

        </form>
    </div>
<?php include 'admin-footer.php'; ?>