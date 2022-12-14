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
                                <a href="http://localhost/Web_Assignment/Home/admin_show" class="nav-item nav-link ">Home</a>
                                <a href="http://localhost/Web_Assignment/About/admin_show"class="nav-item nav-link">About</a>
                                <a href="http://localhost/Web_Assignment/Service/admin_show" class="nav-item nav-link">Services</a>
                                <a href="http://localhost/Web_Assignment/Rooms/admin_show" class="nav-item nav-link">Rooms</a>
                                <a href="http://localhost/Web_Assignment/Booking/admin_show" class="nav-item nav-link">Booking</a>
                                <a href="http://localhost/Web_Assignment/Contact/admin_show" class="nav-item nav-link">Contact</a>
                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary rounded-0 py-4 px-md-5" data-bs-toggle="dropdown">
                                Hi, <u> <?php echo $_SESSION['user'] ?> </u> <i class="fa fa-arrow-down ms-3"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="http://localhost/Web_Assignment/Booking/viewAllBooking">Manage Booking</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Web_Assignment/Rooms/manage_rooms">Manage Rooms</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Web_Assignment/Admin/viewAllAdmin">Manage Admin</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Web_Assignment/Contact/viewAllcomment">Manage Comments</a></li>
                                    <li><a class="dropdown-item" href="Login/logout">Log out</a></li>
                                </ul>
                            </div>
                        
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="./assets/js/manageadmin.js"></script>
        <table id="mytable" class="table table-striped " style="width:80%; margin:auto">
		<thead>
            <tr class= "btn-dark">
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Fullname</th>
                <th scope="col">Phone</th>
                <th scope="col">Exp_year</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="data" >
            <?php foreach($data["data"] as $value): ?>  
                <tr id="row<?=$value['username']?>" style="text-align:center">
                    <td id ="username_Val<?=$value['username']?>"><?=$value['username']?></td>
                    <td id ="password_Val<?=$value['username'] ?>"><?=$value['password']?></td>
                    <td id ="fullname_Val<?=$value['username'] ?>"><?=$value['fullname']?></td>
                    <td id ="phone_Val<?=$value['username'] ?>"><?=$value['phone']?></td>
                    <td id ="exp_year_Val<?=$value['username'] ?>"><?=$value['exp_year']?></td>
                    <td >
                        <button type="submit" class="btn btn-primary" id ="edit_button<?=$value['username'] ?>" onclick="get_edit('<?=$value['username']?>')">Edit</button>
                        <button type="submit" class="btn btn-primary" id ="save_button<?=$value['username'] ?>" onclick="get_save('<?=$value['username']?>')">Save</button>
                        <button type="submit" class="btn btn-primary"id = "delete_button<?=$value['username'] ?>" onclick="get_delete('<?=$value['username']?>')">Delete</button>
                    </td>                   
                </tr>
            <?php endforeach; ?>
        </tbody>
	</table>