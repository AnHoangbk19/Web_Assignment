<?php
class About extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"about"
        ]);
    }
    public function Admin_show(){
        $this->view("content_layout",[
            "page"=>"admin/about"
        ]);
    }
}

?>