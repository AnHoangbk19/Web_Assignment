<?php
class Admin extends Controller{
    public function show(){
        $this->view("content_layout",[
            "page"=>"home"
        ]);
    }

    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"admin"
        ]);
    }
    public function viewAllAdmin(){
        $data = $this->model("AdminModel")->getviewAlladmin();
        $this->view("content_layout2",[
            "page"=>"manageadmin",
            "data"=> $data
        ]);
    }
    public function editAdmin(){
        if(isset($_POST['edit_row'])){
            $username = $_POST['username_val'];
            $password = $_POST['password_val'];
            $fullname = $_POST['fullname_val'];
            $phone = $_POST['phone_val'];
            $exp_year = $_POST['exp_year_val'];

            $result =$this->model("AdminModel")->geteditAdmin($username, $password, $fullname, $phone, $exp_year);
      
        }
    }
    public function deleteAdmin(){
        if(isset($_POST['delete_row'])){
            $username = $_POST['username'];
            $result = $this->model("AdminModel")->getdeleteAdmin($username);
        }
    }
    
    // public function getAdmin(){
    //     if(isset($_POST['admin'])){
    //         $username = $_POST['username'];
    //         $password = $_POST['password'];
    //         $fullname = $_POST['fullname'];
    //         $phone = $_POST['phone'];
    //         $exp_year = $_POST['exp_year'];

    //         $kq = $this->model("AdminModel")->AddAdmin($username, $password, $fullname, $phone, $exp_year);
    //         if ($kq){
    //             $this->alert("Tạo tài khoản thành công!!!");
    //         }
    //         else {
    //             $this->alert("Tạo tài khoản thất bại...Mời nhập lại");
    //         }
    //     }
    //     $this->show();
    // }
}

?>