<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car rents</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Car Rentals</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container d-flex justify-content-center align-items-center my-auto header_card">
            <div class="col-lg-8">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-light way_to_rent_car">
        <div class="container py-5">
            <div class="col-md-12 d-flex justify-content-center">
                <h2 class="fw-bold">Our Latest Services</h2>
            </div>
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-car"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">Wedding Ceremony</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-car"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">City Transfer</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-car"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">Airport Transfer</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-car"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">Whole City Tour</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="car_delaite">
        <div class="container py-5">
            <div class="row">
                <?php
                include "./db/conn.php";
                $sql = "SELECT * FROM `car`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {

                ?>
                        <div class="col-md-3 col-sm-10 mt-4">
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top card_img" src="./admin/<?php echo $row['img'] ?>" alt="Card image cap">
                                <div class="card-body car_info">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo $row['fuel']; ?></p>
                                    <p class="card-text"><?php echo $row['transmission']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span><?php echo $row['rupees'];?></span>/Day</p>
                                    <a href="./carBooking.php?name=<?php echo $row['name'];?>&p=<?php echo $row['rupees'];?>" class="btn mt-2">Book Now </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<center><P>result is not found</P></center>";
                }
                ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>