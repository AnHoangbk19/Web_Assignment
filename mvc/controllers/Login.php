<?php
class Login extends Controller{
    function show(){
        $this->view("login_page",[]);
    }
    public function login(){
        $result_mess = false;
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            if (empty($username) || empty($pass)){
                $this->view("login_page",[
                    "result" => $result_mess
                ]);
            }
            $kq = $this->model("LoginModel")->login($username);
            $row = mysqli_fetch_array($kq);
            // echo $row['username'];
            if (mysqli_num_rows($kq) > 0){
                if ($pass != $row['password']){
                    $this->view("login_page",[
                        "result" => $result_mess
                    ]);
                }
                else{
                    $result_mess = true;
                    $_SESSION['user'] = $row['username'];
                    $this->view("content_layout2",[
                        "page"=>"home",
                        "username" => $row['username']
                    ]);
                }
                
            }
            else{
                $this->view("login_page",[
                    "result" => $result_mess
                ]);
            }
        }
    }
    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        $this->view("content_layout",[
            "page"=>"home"
        ]);
    }
}

?>