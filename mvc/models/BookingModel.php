
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
}
?>