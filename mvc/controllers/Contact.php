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
}

?>