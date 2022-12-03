<?php
class Booking extends Controller{


    public function show(){
        $this->view("content_layout",[
            "page"=>"booking"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"booking"
        ]);
    }
    public function viewAllBooking(){
        $data = $this->model("BookingModel")->getviewAllbooking();
        $this->view("content_layout2",[
            "page"=>"managebooking",
            "data"=> $data
        ]);
    }
    public function editBooking(){
        if(isset($_POST['edit_row'])){
            
            $id = $_POST['id_val'];
            $email = $_POST['email_val'];
            $name = $_POST['name_val'];
            $checkin = $_POST['checkin_val'];
            $checkout = $_POST['checkout_val'];
            $adult = $_POST['adult_val'];
            $child = $_POST['child_val'];
            $room = $_POST['room_val'];
            $request = $_POST['request_val'];
            echo "Hello";
            $this->model("BookingModel")->geteditBooking($id,$name, $email, $checkin, $checkout, $adult, $child, $room, $request);
            echo "Pass";
            unset($_POST);
	        exit();
            
        }
    }
    public function getBooking(){
        if(isset($_POST['booking'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $adult = $_POST['adult'];
            $child = $_POST['child'];
            $room = $_POST['room'];
            $request = $_POST['request'];
            $kq = $this->model("BookingModel")->AddBooking($name, $email, $checkin, $checkout, $adult, $child, $room, $request);
            if ($kq){
                $this->alert("Đặt phòng thành công!!!");
            }
            else {
                $this->alert("Đặt phòng thất bại...Mời nhập lại");
            }
        }
        $this->show();
    }

}

?>