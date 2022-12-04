<?php
class RoomModel extends Database{
    public function getRoom(){
        
        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($this->connect, $sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        //close database
        //mysqli_close($this->connect);
        return $rooms;                         
    }

    public function getRoomById($id){
        $sql = "SELECT * FROM rooms WHERE id = $id";
        $result = mysqli_query($this->connect, $sql);
        $room = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        //close database
        //mysqli_close($this->connect);
        return $room;                         
    }

    public function addRoom($data){
        $sql = "INSERT INTO `rooms` (`roomType`, `description`,`bath`, `bed`, `status`, `rating`, `price`, `image`) 
                VALUES              ('{$data['roomType']}', '{$data['description']}', '{$data['bath']}', '{$data['bed']}', '{$data['status']}', '{$data['rating']}', '{$data['price']}', '{$data['image']}')";
        $result = mysqli_query($this->connect, $sql);
        return $result;
    }

    public function updateRoom($data){
        $sql = "UPDATE `rooms` SET `description` = '{$data['description']}', `bath` = '{$data['bath']}', `bed` = '{$data['bed']}', `status` = '{$data['status']}', `rating` = '{$data['rating']}', `price` = '{$data['price']}', `image` = '{$data['image']}' WHERE `rooms`.`roomType` = '{$data['roomType']}'";
        $result = mysqli_query($this->connect, $sql);
        return $result;
    }
     
    public function deleteRoom($id){
        $sql = "DELETE FROM `rooms` WHERE `rooms`.`id` = $id";
        $result = mysqli_query($this->connect, $sql);
        return $result;
    }
}
?>