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

    public function signup(){
        // $result_mess = 'false';
        if(isset($_POST['submit2'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $rpass = $_POST['rpass'];
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            if (empty($user) || empty($pass) || empty($rpass) || empty($fullname) || empty($phone)){
                $this->view("login_page",[
                    "result2" => 'Cần điền đầy đủ thông tin!'
                ]);
            }
            else if($pass != $rpass){
                $this->view("login_page",[
                    "result2" => 'password và repeat password phải giống nhau!'
                ]);
            }
            else{
                $kq = $this->model("LoginModel")->login($user);
            // echo $row['username'];
                if (mysqli_num_rows($kq) > 0){
                    $this->view("login_page",[
                        "result2" => 'username đã tồn tại!'
                    ]);    
                } else {
                    $kq = $this->model("LoginModel")->signup($user, $pass, $fullname, $phone);
                    $this->view("login_page",[
                        "result2" => 'success'
                    ]);  
                }
            }
            
        } else {
            $this->view("login_page",[
                "result2" => 'Lỗi đăng kí!'
            ]);
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