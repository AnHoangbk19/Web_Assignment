<?php
class Service extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"service"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"service"
        ]);
    }
}

?>