
<?php
class ContactModel extends Database{

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }



    public function AddContact( $username, $email, $subject, $message){
        $qr1 = "SELECT * FROM contact";
        $rows = $this->_query($qr1);
        $id = mysqli_num_rows($rows) + 1; 
        $sql = "INSERT INTO contact VALUES ('$username','$email','$subject','$message')";
        $kq = $this->_query($sql);
        return $kq;
    }
}
?>