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
                                <a href="http://localhost/Web_Assignment/Rooms" class="nav-item nav-link">Rooms</a>
                                <a href="http://localhost/Web_Assignment/Booking" class="nav-item nav-link">Booking</a>
                                <a href="http://localhost/Web_Assignment/Contact" class="nav-item nav-link">Contact</a>
                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary rounded-0 py-4 px-md-5" data-bs-toggle="dropdown">
                                Hi, <u> <?php echo $_SESSION['user'] ?> </u> <i class="fa fa-arrow-down ms-3"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Web_Assignment/Booking/manage_booking">Manage Booking</a></li>
                                    <li><a class="dropdown-item" href="#">Manage Rooms</a></li>
                                    <li><a class="dropdown-item" href="#">Manage News</a></li>
                                    <li><a class="dropdown-item" href="#">Manage Admin</a></li>
                                    <li><a class="dropdown-item" href="#">Manage Comments</a></li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
                                </ul>
                            </div>
                        
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
<<<<<<< Updated upstream
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="./assets/js/managebooking.js"></script>
        <button type="submit" class="btn btn-primary" onclick="showAll()">Show all Rooms</button>

        <table id="mytable" class="table table-striped " style="width:80%; margin:auto">
		<thead>
            <tr>
=======

        <!-- add room modal -->
        <div class="modal fade" id="addRoomModal" tabindex="-1" role="dialog" aria-labelledby="addRoomModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addRoomModalLabel">Add Room</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- https://media.timeout.com/images/105859033/image.jpg -->
                        <!-- modal form -->
                        <div class="modal-body">
                            <form action="http://localhost/Web_Assignment/Rooms/addRoom" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="room_type" class="col-form-label">Room Type:</label>
                                    <input type="text" class="form-control" id="room_type" name="room_type">
                                </div>
                                <div class="mb-3">
                                    <label for="room_price" class="col-form-label">Room Price:</label>
                                    <input type="text" class="form-control" id="room_price" name="room_price">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="bed" class="col-form-label">Bed:</label>
                                    <input type="number" class="form-control" id="bed" name="bed" min="1" max="3">
                                </div>
                                <div class="mb-3">
                                    <label for="bath" class="col-form-label">Bath:</label>
                                    <input type="number" class="form-control" id="bath" name="bath" min="1" max="3">
                                </div>
                                <div class="mb-3">
                                    <label for="room_description" class="col-form-label">Room Description:</label>
                                    <textarea class="form-control" id="room_description" name="room_description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="room_image" class="col-form-label">Room Image:</label>
                                    <input type="text" class="form-control" id="room_image" name="room_image">
                                </div>
                                <div class="mb-3">
                                    <label for="room_status" class="col-form-label">Room Status:</label>
                                    <select class="form-select" aria-label="Default select example" id="room_status" name="room_status">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Available</option>
                                        <option value="0">Unavailable</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="room_rating" class="col-form-label">Room Rating:</label>
                                    <select class="form-select" aria-label="Default select example" id="room_rating" name="room_rating">
                                        <option selected>Open this select menu</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    <button name="add_Room" type="submit" class="btn btn-primary">Add Room</button>
                                </div> 
                            </form>
                        </div>
                        <!-- end modal form -->   
                    </div>
                </div>
        </div>
        <!-- add room modal end -->

        <!-- edit room modal -->
        <div class="modal fade" id="editRoomModal" tabindex="-1" role="dialog" aria-labelledby="editRoomModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="addRoomModalLabel">Update Room</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- https://media.timeout.com/images/105859033/image.jpg -->
                        <!-- modal form -->
                        <div class="modal-body">
                            <form action="http://localhost/Web_Assignment/Rooms/updateRoom" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="room_type" class="col-form-label">Room Type:</label>
                                    <input type="text" class="form-control" id="room_type" name="room_type">
                                </div>
                                <div class="mb-3">
                                    <label for="room_price" class="col-form-label">Room Price:</label>
                                    <input type="text" class="form-control" id="room_price" name="room_price">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="bed" class="col-form-label">Bed:</label>
                                    <input type="number" class="form-control" id="bed" name="bed" min="1" max="3">
                                </div>
                                <div class="mb-3">
                                    <label for="bath" class="col-form-label">Bath:</label>
                                    <input type="number" class="form-control" id="bath" name="bath" min="1" max="3">
                                </div>
                                <div class="mb-3">
                                    <label for="room_description" class="col-form-label">Room Description:</label>
                                    <textarea class="form-control" id="room_description" name="room_description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="room_image" class="col-form-label">Room Image:</label>
                                    <input type="text" class="form-control" id="room_image" name="room_image">
                                </div>
                                <div class="mb-3">
                                    <label for="room_status" class="col-form-label">Room Status:</label>
                                    <select class="form-select" aria-label="Default select example" id="room_status" name="room_status">
                                        <option selected>Open this select menu</option>
                                        <option value="1">Available</option>
                                        <option value="0">Unavailable</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="room_rating" class="col-form-label">Room Rating:</label>
                                    <select class="form-select" aria-label="Default select example" id="room_rating" name="room_rating">
                                        <option selected>Open this select menu</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    <button name="update_Room" type="submit" class="btn btn-primary">Save</button>
                                </div> 
                            </form>
                        </div>
                        <!-- end modal form -->  
                    </div>
                </div>
            </div>
        <!-- edit room modal end -->

                            

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="./assets/js/managebooking.js"></script>
        <!-- <button type="submit" class="btn btn-primary me-3" onclick="showAll()">Show all Rooms</button> -->
        <!-- open modal -->
        <button type="submit" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addRoomModal"> &plus;Add Room</button>

        <table id="mytable" class="table table-striped" style="width:80%; margin:auto">
		<thead>
            <tr class="btn-dark">
>>>>>>> Stashed changes
                <th scope="col">Id</th>
                <th scope="col">RoomType</th>
                <th scope="col">Bath</th>
                <th scope="col">Bed</th>
                <th scope="col">Status</th>
                <th scope="col">Rating</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody id="data" >
            <?php $rooms = $data['rooms']; ?>
            <?php foreach($rooms as $room): ?>
            <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['roomType'] ?></td>
                <td><?php echo $room['bath'] ?></td>
                <td><?php echo $room['bed'] ?></td>
                <td><?php echo $room['status'] ?></td>
                <td><?php echo $room['rating'] ?></td>
                <td><?php echo $room['description'] ?></td>
<<<<<<< Updated upstream
                <td><?php echo $room['price'] ?></td>
                <td>
                    Edit
                    <!-- <a href="http://localhost/Web_Assignment/Rooms/edit/<?php echo $room['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="http://localhost/Web_Assignment/Rooms/delete/<?php echo $room['id'] ?>" class="btn btn-danger">Delete</a> -->
=======
                <td><?php echo '$'.$room['price'] ?></td>
                <td>
                    
                        <button 
                            type="submit" class="btn btn-sm btn-primary bi bi-pen" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editRoomModal"
                        
                        >
                        </button>
                        <a href="http://localhost/Web_Assignment/Rooms/deleteRoom/<?=$room['id']?>">
                        <button 
                            type="submit" 
                            class="btn btn-sm btn-dark bi bi-trash" 
                            data-bs-toggle="modal" 
                            data-bs-target="#deleteRoomModal"
                            name="deleteRoom"
                        >                        
                        </button>
                        </a>
                    
>>>>>>> Stashed changes
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
	</table>