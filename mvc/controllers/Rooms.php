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
        $roomModel = $this->model("RoomModel");
        $rooms = $roomModel->getRoom();
        
        $this->view("content_layout2",[
            "page"=>"rooms",
            "rooms"=>$rooms
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
    public function addRoom(){
        if(isset($_POST['add_Room'])){
            $roomType = $_POST['room_type'];
            $description = $_POST['room_description'];
            $bath = $_POST['bath'];
            $bed = $_POST['bed'];
            $status = $_POST['room_status'];
            $rating = $_POST['room_rating'];
            $price = $_POST['room_price'];
            $image = $_POST['room_image'];
            $data = [
                'roomType' => $roomType,
                'description' => $description,
                'bath' => $bath,
                'bed' => $bed,
                'status' => $status,
                'rating' => $rating,
                'price' => $price,
                'image' => $image
            ];
            $kq = $this->model("RoomModel")->addRoom($data);
            if ($kq){
                $this->alert("Thêm phòng thành công!!!");
            }
            else {
                $this->alert("Thêm phòng thất bại...Mời nhập lại");
            }
        }
        $this->manage_rooms();
    }

    public function updateRoom(){
        if(isset($_POST['update_Room'])){
            
            $roomType = $_POST['room_type'];
            $description = $_POST['room_description'];
            $bath = $_POST['bath'];
            $bed = $_POST['bed'];
            $status = $_POST['room_status'];
            $rating = $_POST['room_rating'];
            $price = $_POST['room_price'];
            $image = $_POST['room_image'];
            $data = [
                'roomType' => $roomType,
                'description' => $description,
                'bath' => $bath,
                'bed' => $bed,
                'status' => $status,
                'rating' => $rating,
                'price' => $price,
                'image' => $image
            ];
            $kq = $this->model("RoomModel")->updateRoom($data);
            if ($kq){
                $this->alert("Cập nhật phòng thành công!!!");
            }
            else {
                $this->alert("Cập nhật phòng thất bại...Mời nhập lại");
            }
        }
        $this->manage_rooms();
    }

    public function deleteRoom($id){
        $kq = $this->model("RoomModel")->deleteRoom($id);
        if ($kq){
            $this->alert("Xóa phòng thành công!!!");
        }
        else {
            $this->alert("Xóa phòng thất bại...Mời nhập lại");
        }
        $this->manage_rooms();
    }
}

?>