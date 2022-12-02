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
    public function manage_booking(){
        $this->view("content_layout2",[
            "page"=>"managebooking"
        ]);
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