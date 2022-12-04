
<?php
class AdminModel extends Database{

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }


    public function AddAdmin($username, $password, $fullname, $phone, $exp_year){
        // $qr1 = "SELECT * FROM admin";
        // $rows = $this->_query($qr1);
        $sql = "INSERT INTO admin VALUES ('$username', '$password', '$fullname', '$phone', '$exp_year')";
        $kq = $this->_query($sql);
        return $kq;
    }
    public function geteditAdmin($username, $password, $fullname, $phone, $exp_year){
        $sql = "UPDATE admin SET password ='$password', fullname = '$fullname', phone = '$phone', exp_year = '$exp_year' WHERE username = '$username'";
        $result = $this->_query($sql);
        return $result;
    }
    public function getdeleteAdmin($username){
        $sql = "DELETE FROM admin WHERE username = '$username'";
        $result = $this->_query($sql);
        return $result;
    }

    public function getviewAlladmin(){
        $sql = "SELECT * FROM admin";
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