<?php

class ViewData {

	public $Model;
	public $Errors;
	
    public function __construct($model, $errors) {
    	$this->Model = $model;
    	$this->Errors = $errors;
    }
}
?>