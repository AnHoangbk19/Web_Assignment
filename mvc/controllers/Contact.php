<?php
class Contact extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"contact"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"contact"
        ]);
    }
    public function viewAllcomment(){
        $data = $this->model("CommentModel")->getviewAllcomment();
        $this->view("content_layout2",[
            "page"=>"managecomment",
            "data"=> $data
        ]);
    }

    public function denyComment(){
        if(isset($_POST['delete_row'])){
            $id = $_POST['id'];
            $result = $this->model("CommentModel")->getdenyComment($id);
        }
    }

    public function getComment(){
        if(isset($_POST['comment'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $kq = $this->model("CommentModel")->AddComment($name, $email, $subject, $message);
            if ($kq){
                $this->alert("Gửi comment thành công!!!");
            }
            else {
                $this->alert("Gửi comment thất bại...Mời nhập lại");
            }
        }
        $this->show();
    }
}

?>