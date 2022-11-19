<?php
class Booking extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"booking"
        ]);
    }
}

?>