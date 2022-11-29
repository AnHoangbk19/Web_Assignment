<?php
class Contact extends Controller{
    function show(){
        $this->view("content_layout",[
            "page"=>"contact"
        ]);
    }
}

?>