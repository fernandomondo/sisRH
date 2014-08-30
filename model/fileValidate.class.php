<?php

class fileValidate {

    public function isValid($fileBO) {
    	$errors = array();
    	
    	if($fileBO->getName() == "")
    		$errors["nome"] = "nome invalido";
    	
    	return $errors;
    }
}
?>