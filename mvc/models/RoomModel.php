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
}
?>