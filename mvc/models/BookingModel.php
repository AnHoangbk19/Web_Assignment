
<?php
class BookingModel extends Database{

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }


    public function AddBooking($name, $email, $checkin, $checkout, $adult, $child, $room, $request){
        $qr1 = "SELECT * FROM booking";
        $rows = $this->_query($qr1);
        $id = mysqli_num_rows($rows) + 1; 
        $sql = "INSERT INTO Booking VALUES ('$id', '$email', '$name', '$checkin','$checkout', '$adult','$child','$room', '$request')";
        $kq = $this->_query($sql);
        return $kq;
    }
    public function geteditBooking($id,$name, $email, $checkin, $checkout, $adult, $child, $room, $request){
        $sql = "UPDATE booking SET Name ='$name', Email = '$email', Check_in = '$checkin', Check_out = '$checkout', Adult = $adult, Child = $child, Room = '$room', Request = '$request' WHERE IdBooking = $id";
        $result = $this->_query($sql);
        echo "update";
        if ($result){
            echo "success";
        }
        else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connect);
		}
    }

    public function getviewAllbooking(){
        $sql = "SELECT * FROM booking";
        $query1 = $this->_query($sql);
        if(!$query1) return [];
        $types = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($types, $row);
        }
        return $types;
    }
}
?>