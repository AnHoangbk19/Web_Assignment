<?php
class Rooms extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"rooms"
        ]);
    }
}

?>