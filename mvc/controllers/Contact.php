<?php
class Contact extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"contact"
        ]);
    }
    public function Admin_show(){
        $this->view("content_layout",[
            "page"=>"admin/contact"
        ]);
    }
}

?>