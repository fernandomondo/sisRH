<?php
include_once("model/fileBO.class.php");
include_once("controller/viewData.class.php");
include_once("model/fileValidate.class.php");

class FileController{
	
public function	__construct(){
	
	$this->validate = new FileValidate();
}
	
	public function execute(){
		
		if ($_SERVER["REQUEST_METHOD"] === "POST") {

			$fileBO = new FileBO();
			
			$fileBO->setAtributes($_FILES["arquivo"]["name"],$_FILES["arquivo"]["tmp_name"], $_FILES["arquivo"]["type"], $_FILES["arquivo"]["size"], $_POST["nome"], $_POST["endereco"], $_POST["telefone"], $_POST["celular"]);
			
			$errors = $this->validate->isValid($fileBO);
			//echo $errors;
			if(count($errors) == 0){
				//savar arquivo
				$valido = $fileBO->moverArquivo($_SERVER['DOCUMENT_ROOT']."/sisRH/upload/");
				
				if(!$valido){
					$errors["arquivo"] = "erro ao gravar arquivo";
				 	return new ViewData($fileBO, $errors);
				}
				
				//salvar no banco
				$fileBO->salvar();	
				
				//redireciona para a página							
				header("Location: file.php");
			}
			
			return new ViewData($fileBO, $errors);

		} else {
			return new ViewData(new FileBO(), array());
		}
		
	}
	
}
 
 
?>
