 <!-- Header Start -->
 <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="http://localhost/Web_Assignment/Home" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="#" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="http://localhost/Web_Assignment/Home" class="nav-item nav-link">Home</a>
                                <a href="http://localhost/Web_Assignment/About"class="nav-item nav-link">About</a>
                                <a href="http://localhost/Web_Assignment/Service" class="nav-item nav-link">Services</a>
                                <a href="http://localhost/Web_Assignment/Rooms" class="nav-item nav-link active">Rooms</a>
                                <a href="http://localhost/Web_Assignment/Booking" class="nav-item nav-link">Booking</a>
                                <a href="http://localhost/Web_Assignment/Contact" class="nav-item nav-link">Contact</a>
                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                            <div class="button-user-login d-flex">
                                <p class="m-0"> 
                                    <a href="http://localhost/Web_Assignment/Login"><button type="button" class="btn btn-primary rounded-0 py-4 px-md-5" data-bs-toggle="modal" data-bs-target="#login">
                                        Sign in <i class="fa fa-arrow-right ms-3"></i>
                                    </button></a>
                                </p>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(./assets/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Room Detail</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <?php $room = $data["room"]; ?>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Detail</h6>
                    <h1 class="mb-5"><?php echo $room["roomType"]; ?></h1>
                     
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src=<?php echo $room['image']; ?>  style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src=<?php echo $room['image']; ?>>
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src=<?php echo $room['image']; ?>>
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src=<?php echo $room['image']; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-10">
                                        <div class="form-floating">
                                            <?php echo "Room Type: " . $room['roomType']; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <?php                                                
                                            echo "Rating: " . $room['rating'] . '<small class="fa fa-star text-primary"></small>';
                                        ?>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            Furniture:
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $room['bed']; ?> Bed</small>
                                    </div>
                                    <div class="col-md-10">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $room['bath']; ?> Bath</small>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-floating">
                                            <<small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <?php echo "Desciption:" . "<br><br>" . $room['description'] . $room['description']?>
                                            <?php echo "<br><br>" ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">$<?php echo $room['price']; ?>/Night</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Leave Your <span class="text-primary text-uppercase">Comments</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your comments">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->