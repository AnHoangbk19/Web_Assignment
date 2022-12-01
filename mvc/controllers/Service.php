<?php
class Service extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"service"
        ]);
    }
    public function Admin_show(){
        $this->view("content_layout",[
            "page"=>"admin/service"
        ]);
    }
}

?>