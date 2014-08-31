<?php
include_once("model/fileBO.class.php");

class fileValidate {

    public function isValid($fileBO) {
    	$errors = array();
    	
    	if($fileBO->getNome() == "")
    		$errors["nome"] = "nome invalido.";
    		
    		if($fileBO->getEndereco() == "")
    			$errors["endereco"] = "endereço inválido.";
    		
    		if($fileBO->getTelefone() == "")
    			$errors["telefone"] = "telefone inválido.";
    		
    		if($fileBO->getCelular() == "")
    			$errors["celular"] = "celular invalido.";
    		
    		if($fileBO->getNomeArquivo() == "")
    			$errors["arquivo"] = "arquivo inválido.";
    		
    		$extension = pathinfo($fileBO->getNomeArquivo(),PATHINFO_EXTENSION);
    	
    		if(!($extension == 'pdf' || $extension == 'doc' || $extension == 'zip'))
    			$errors["arquivo"] = "arquivo com extensão inválida.";
    		
			$doisMega = (1024 * 1024 * 2);
    		
    		if ($fileBO->getTamanhoArquivo() >  $doisMega)
    			$errors["arquivo"] = "arquivo muito grande.";
  	
    	return $errors;
    }
}
?>