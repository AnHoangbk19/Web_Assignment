<?php
class LoginModel extends Database{
    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }

    public function login($username){
        $sql = "SELECT  * FROM admin WHERE username = '$username'";
        return $this->_query($sql);
    }

    
}


?>