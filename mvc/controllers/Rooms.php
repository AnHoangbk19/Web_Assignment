<?php
class Rooms extends Controller{
    function show(){
        $roomModel = $this->model("RoomModel");
        $rooms = $roomModel->getRoom();

        $this->view("content_layout",[
            "page"=>"rooms",
            "rooms"=>$rooms
        ]);
    }

    function viewDetail($id){
        $roomModel = $this->model("RoomModel");
        $room = $roomModel->getRoomById($id);

        $this->view("content_layout",[
            "page"=>"room_detail",
            "room"=>$room
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"rooms"
        ]);
    }

    public function manage_rooms(){
        $roomModel = $this->model("RoomModel");
        $rooms = $roomModel->getRoom();
        
        $this->view("content_layout2",[
            "page"=>"managerooms",
            "rooms"=>$rooms
        ]);
    }
    // public function getBooking(){
    //     if(isset($_POST['booking'])){
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $checkin = $_POST['checkin'];
    //         $checkout = $_POST['checkout'];
    //         $adult = $_POST['adult'];
    //         $child = $_POST['child'];
    //         $room = $_POST['room'];
    //         $request = $_POST['request'];
    //         $kq = $this->model("BookingModel")->AddBooking($name, $email, $checkin, $checkout, $adult, $child, $room, $request);
    //         if ($kq){
    //             $this->alert("Đặt phòng thành công!!!");
    //         }
    //         else {
    //             $this->alert("Đặt phòng thất bại...Mời nhập lại");
    //         }
    //     }
    //     $this->show();
    // }
}

?>