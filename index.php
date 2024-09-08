<?php
include "./db/conn.php";
if (!isset($_COOKIE["name"])) {
    header('location:login.php');
}
?>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(function() {
            $("#lets_search").bind('submit', function() {
                var value = $('#str').val();
                //   $('#str').val().remove();
                $.post('searchCar.php', {
                    value: value
                }, function(data) {
                    $("#search_results").html(data);
                });
                return false;
            });
        });
        //   $(document).ready(function(){
        //   $("#lets_search").click(function(event) { 
        //         $('#str').val(""); 
        //     });
        // });
    </script>
</head>

<body>
    <div class="container-fluid header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">NOVAcar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item" allCarList>
                                <a class="nav-link" href="#allCarList">Car</a>
                            </li>
                            <li class="nav-item" allCarList>
                                <a class="nav-link" href="#map">Map</a>
                            </li>
                            <li class="nav-item" allCarList>
                                <a class="nav-link" href="#service">Service</a>
                            </li>
                            <li class="nav-item" allCarList>
                                <a class="nav-link" href="#customer">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link" href="#footer_section">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php">
                                    <button class="btn btn-outline-dark">Logout</button>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container d-flex justify-content-center align-items-center my-auto header_card">
            <div class="col-lg-8">
                <div class="text w-100 text-center mb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <p style="font-size: 18px;color:#e7e7e7">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                </div>
            </div>
        </div>
    </div>
    <!-- way to reant a car -->
    <section class="bg-light way_to_rent_car">
        <div class="container py-5">
            <div class="col-md-12 col-sm-10 d-flex justify-content-center">
                <h3 class="fw-bold"><span><i class="fa-regular fa-circle fa-2xs h-2"></i></span>&nbspBetter Way Rent Your Perfect Cars&nbsp<span><i class="fa-regular fa-circle fa-2xs h-2"></i></span></h3>
            </div>
            <div class="row my-5">
                <div class="col-md-3 col-sm-10">
                    <div class="way_to_rent d-flex justify-content-center">
                        <div class="icon"><i class="fa-solid fa-1" style="margin-right: 11px;margin-top:2px;"></i></div>
                    </div>
                    <div class="text d-flex justify-content-center my-3">
                        <p class="heading mb-2" style="color: #6c6c6c;font-weight: 600;font-size: larger;">Select A Best Car</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="way_to_rent d-flex justify-content-center">
                        <div class="icon"><i class="fa-solid fa-2" style="margin-right: 9px;margin-top:2px;"></i></div>
                    </div>
                    <div class="text d-flex justify-content-center my-3">
                        <p class="heading mb-2" style="color: #6c6c6c;font-weight: 600;font-size: larger;">Click TO Book Now Button</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="way_to_rent d-flex justify-content-center">
                        <div class="icon"><i class="fa-solid fa-3" style="margin-right: 9px;margin-top:4px;"></i></div>
                    </div>
                    <div class="text d-flex justify-content-center my-3">
                        <p class="heading mb-2" style="color: #6c6c6c;font-weight: 600;font-size: larger;">Fill Up The Form</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="way_to_rent d-flex justify-content-center">
                        <div class="icon"><i class="fa-solid fa-4" style="margin-right: 7px;margin-top:4px;"></i></div>
                    </div>
                    <div class="text d-flex justify-content-center my-3">
                        <p class="heading mb-2" style="color: #6c6c6c;font-weight: 600;font-size: larger;">Submit The Form</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="car_delaite" id="allCarList">
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <h2 class="fw-bold">Our Cars</h2>
            </div>
            <div class="d-flex justify-content-end">
                <form class="d-flex" id="lets_search">
                    <input class="form-control me-2" type="text" placeholder="Search a car" id="str" value="" name="serach_car_name" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit" name="search">Search</button>
                </form>
            </div>
            <div class="row" id="search_results">
                <?php
                $sql = "SELECT * FROM `car`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {

                ?>
                        <div class="col-md-3 col-sm-10 mt-4 car_card">
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top card_img" src="./admin/<?php echo $row['img'] ?>" alt="Card image cap">
                                <div class="card-body car_info">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo $row['fuel']; ?></p>
                                    <p class="card-text"><?php echo $row['transmission']; ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span><?php echo $row['rupees']; ?></span>/Day</p>
                                    <a href="./carBooking.php?name=<?php echo $row['name']; ?>&p=<?php echo $row['rupees']; ?>" class="btn mt-2">Book Now </a>
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



    <!-- about -->
    <section class="py-3 py-md-5 bg-light" id="about">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy" src="./image/about.jpg" alt="About 2">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-10">
                            <h2 class="mb-3">Why Choose Us?</h2>
                            <p class="lead fs-4 mb-3 mb-xl-5">We offer a varied fleet of cars, ranging from the compact Toyota Yaris to 7-seaters, and SUVs. All our vehicles have air conditioning, power steering, electric windows. All our vehicles are bought and maintained at official dealerships only. Automatic transmission cars are available in every booking class.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0"> Commission free rental</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0">Same day rental</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4 mb-xl-5">
                                <div class="me-3 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="fs-5 m-0"> 24/7 telephone contact</p>
                                </div>
                            </div>
                            <a href="#footer_section"><button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services -->
    <section class="bg-light way_to_rent_car" id="service">
        <div class="container py-5">
            <div class="col-md-12 d-flex justify-content-center">
                <h2 class="fw-bold">Our Latest Services</h2>
            </div>
            <div class="row my-5">
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-ring"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">Wedding Ceremony</h4>
                            <p>Car Rental Agency offering luxury vehicles for weddings and special events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-city"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">City Transfer</h4>
                            <p>Convenient city transfer with premium car rentals for hassle-free travel experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="w-100 text-center">
                        <div class="way_to_rent d-flex justify-content-center">
                            <div class="icon"><i class="fa-solid fa-plane"></i></div>
                        </div>
                        <div class="text_de my-3">
                            <h4 class="heading mb-2">Airport Transfer</h4>
                            <p>Reliable airport transfer car rentals, ensuring comfort and convenience for seamless travel experiences.</p>
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
                            <p>Explore city highlights with our comprehensive car rental tour service. Book your adventure today!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- happy customer -->
    <section id="customer">
        <div class="container">
        <div class="col-md-12 d-flex justify-content-center mt-3">
                <h2 class="fw-bold">Happy Customer</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-10">
                    <div class="card happy_customer_card my-3">
                        <div class="customer_image d-flex justify-content-center align-items-center mt-3">
                            <img src="./image/person_1.jpg" class="card-img-top" alt="Customer">
                        </div>
                        <div class="card-body customer_body">
                            <h5 class="card-title d-flex justify-content-center align-items-center">David Johnson</h5>
                            <p class="card-text d-flex justify-content-center align-items-center">Simple checkout, efficient service, good car. Very pleased.</p>
                        </div>
                        <div class="customer_reviews">
                            <ul>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="card happy_customer_card my-3">
                        <div class="customer_image d-flex justify-content-center align-items-center mt-3">
                            <img src="./image/person_2.jpg" class="card-img-top" alt="Customer">
                        </div>
                        <div class="card-body customer_body">
                            <h5 class="card-title d-flex justify-content-center align-items-center">Robert Miller</h5>
                            <p class="card-text d-flex justify-content-center align-items-center">Quick service, clean cars, great prices. Highly recommend!</p>
                        </div>
                        <div class="customer_reviews">
                            <ul>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="card happy_customer_card my-3">
                        <div class="customer_image d-flex justify-content-center align-items-center mt-3">
                            <img src="./image/person_3.jpg" class="card-img-top" alt="Customer">
                        </div>
                        <div class="card-body customer_body">
                            <h5 class="card-title d-flex justify-content-center align-items-center">James Davis</h5>
                            <p class="card-text d-flex justify-content-center align-items-center">Easy booking, reliable vehicle, smooth process. Will return..</p>
                        </div>
                        <div class="customer_reviews">
                            <ul>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-10">
                    <div class="card happy_customer_card my-3">
                        <div class="customer_image d-flex justify-content-center align-items-center mt-3">
                            <img src="./image/person_4.jpg" class="card-img-top" alt="Customer">
                        </div>
                        <div class="card-body customer_body">
                            <h5 class="card-title d-flex justify-content-center align-items-center">John Deo</h5>
                            <p class="card-text d-flex justify-content-center align-items-center">Car was perfect, no issues. Best rental ever!</p>
                        </div>
                        <div class="customer_reviews">
                            <ul>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                                <li>&#9733;</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35531.48591998987!2d70.72881143739983!3d22.282177678820666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1723727920552!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" id="footer_section" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">NOVA Car</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#allCarList" class="text-white">Car</a>
                        </p>
                        <p>
                            <a href="#service" class="text-white">Service</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#allCarList" class="text-white">Car</a>
                        </p>
                        <p>
                            <a href="#service" class="text-white">Service</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Near By Madhapar ,Rajkot</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="http://localhost/novacar/">NOVAcar.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>