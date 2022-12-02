<?php
class Rooms extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"rooms"
        ]);
    }
    public function admin_show(){
        $this->view("content_layout2",[
            "page"=>"rooms"
        ]);
    }
}

?>