<?php
class Service extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"service"
        ]);
    }
}

?>