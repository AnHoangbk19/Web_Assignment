<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    public function alert($msg)
	{
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}
}
?>