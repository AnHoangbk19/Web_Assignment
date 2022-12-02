<?php
class Home extends Controller{

    public function show(){
        $this->view("content_layout",[
            "page"=>"home"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"home"
        ]);
    }
}

?>