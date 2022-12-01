<?php
class Rooms extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"rooms"
        ]);
    }
    public function Admin_show(){
        $this->view("content_layout",[
            "page"=>"admin/rooms"
        ]);
    }
}

?>