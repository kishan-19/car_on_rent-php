<?php
include "./db/conn.php";

// $query = "SELECT * FROM `car` WHERE name ='" . $_POST['value'] . "'";
$query = "SELECT * FROM `car` WHERE name LIKE '%" . $_POST['value'] . "%'";
// $sql="SELECT * FROM itema WHERE name LIKE '%$query%' OR deltails LIKE '%$query%'";

$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        echo '
            <div class="col-md-3 col-sm-10 mt-4 car_card">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top card_img" src="./admin/' . $row["img"] . '" alt="Card image cap">
                        <div class="card-body car_info">
                            <h5 class="card-title">' . $row["name"] . '</h5>
                            <p class="card-text">' . $row["fuel"] . '</p>
                            <p class="card-text">' . $row["transmission"] . ' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span>' . $row["rupees"] . '</span>/Day</p>
                            <a href="./carBooking.php?name=' . $row["name"] . '&p=' . $row["rupees"] . '" class="btn mt-2">Book Now </a>
                        </div>
                    </div>
            </div>';
    }
} else {
    $sql = "SELECT * FROM `car`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            
            echo '
                <div class="col-md-3 col-sm-10 mt-4 car_card">
                     <div class="card" style="width: 16rem;">
                         <img class="card-img-top card_img" src="./admin/' . $row["img"] . '" alt="Card image cap">
                         <div class="card-body car_info">
                             <h5 class="card-title">' . $row["name"] . '</h5>
                             <p class="card-text">' . $row["fuel"] . '</p>
                             <p class="card-text">' . $row["transmission"] . ' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span>' . $row["rupees"] . '</span>/Day</p>
                             <a href="./carBooking.php?name=' . $row["name"] . '&p=' . $row["rupees"] . '" class="btn mt-2">Book Now </a>
                         </div>
                     </div>
                 </div>';
        }
    }else {
        echo "<center><P>result is not found</P></center>";
    }
}
