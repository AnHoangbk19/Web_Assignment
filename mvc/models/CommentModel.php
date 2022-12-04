<?php
class CommentModel extends Database{

    private function _query($sql){
        return mysqli_query($this->connect, $sql);
    }


    public function getviewAllcomment(){
        $sql = "SELECT * FROM comment";
        $query1 = $this->_query($sql);
        if(!$query1) return [];
        $types = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($types, $row);
        }
        return $types;
    }

    public function getdenyComment($id){
        $sql = "DELETE FROM comment WHERE id = $id";
        $result = $this->_query($sql);
        return $result;
    }

    public function AddComment($name, $email, $subject, $message){
        $qr1 = "SELECT * FROM comment";
        $rows = $this->_query($qr1);
        $id = mysqli_num_rows($rows) + 1; 
        $sql = "INSERT INTO comment VALUES ('$id', '$name',  '$email', '$subject', '$message')";
        $kq = $this->_query($sql);
        return $kq;
    }


}
?>