<?php
class LoginModel extends Database{
    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }

    public function login($username){
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        return $this->_query($sql);
    }

    public function signup($user, $pass, $fullname, $phone){
        $sql = "INSERT INTO admin VALUES ('$user', '$pass', '$fullname', '$phone', 0)";
        return $this->_query($sql);
    }
}


?>