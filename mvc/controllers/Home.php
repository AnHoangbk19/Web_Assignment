<?php
class Home extends Controller{

    function show(){
        $this->view("content_layout",[
            "page"=>"home"
        ]);
    }
}

?>