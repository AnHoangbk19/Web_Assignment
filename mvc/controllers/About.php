<?php
class About extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"about"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"about"
        ]);
    }
}

?>