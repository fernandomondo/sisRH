<?php
class FileController{
	
public function	__construct(){
	
	$this->validate = new FileValidate();
	
	
}
	
	public function execute(){
		
		if ($_SERVER["REQUEST_METHOD"] === "POST") {

			$fileBO = new FileBO($_FILES["arquivo"]["name"], $_FILES["arquivo"]["type"], $_FILES["arquivo"]["size"], $_POST["nome"], $_POST["endereco"], $_POST["telefone"], $_POST["celular"]);
			
			$errors = $this->validate->isValid($fileBO);
			
			if($errors ==  0){
				//savar arquivo
				$fileBO->moveTo("upload");
				//salvar no banco
				$fileBO->salvar();	
				
				//redireciona							
				header("Location: file.php");
			}
			
			return $errors;

		} else {
			return new ViewData(new FileBO(), array());
		}
		
	}
	
}
 
 
?>
