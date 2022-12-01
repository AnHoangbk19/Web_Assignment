<?php
class Home extends Controller{

    public function show(){
        $this->view("content_layout",[
            "page"=>"home"
        ]);
    }
    public function Admin_show(){
        $this->view("content_layout",[
            "page"=>"admin/home"
        ]);
    }
}

?>