<?php																																																																																																																																																																																																																																																																																										
include_once("controller/fileController.class.php");
$fileController = new FileController();
$view = $fileController->execute();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form action="file.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  
  	<div class="form-group <?php if(isset($view->Errors["nome"])) echo 'has-error'; ?>">  
  		<label for="nome">Nome</label>
    	<input class="form-control" id="nome" type="text" name="nome" value="<?php echo $view->Model->getNome(); ?>"/>
    	<span class="help-inline"><?php if(isset($view->Errors["nome"])) echo $view->Errors["nome"]; ?></span>
  	</div>
	<div class="form-group <?php if(isset($view->Errors["endereco"])) echo 'has-error'; ?>">  
  		<label for="endereco">Endereço</label>
    	<input class="form-control" id="endereco" type="text" name="endereco" value="<?php echo $view->Model->getEndereco(); ?>"/>
    	<span class="help-inline"><?php if(isset($view->Errors["endereco"])) echo $view->Errors["endereco"]; ?></span>
  	</div>
  	<div class="form-group <?php if(isset($view->Errors["telefone"])) echo 'has-error'; ?>">  
  		<label for="telefone">Telefone</label>
    	<input class="form-control" id="telefone" type="text" name="telefone" value="<?php echo $view->Model->getTelefone(); ?>"/>
  		<span class="help-inline"><?php if(isset($view->Errors["telefone"])) echo $view->Errors["telefone"]; ?></span>
  	</div>    
  	<div class="form-group <?php if(isset($view->Errors["celular"])) echo 'has-error'; ?>">  
  		<label for="celular">Celular</label>
    	<input class="form-control" id="celular" type="text" name="celular" value="<?php echo $view->Model->getCelular(); ?>"/>
    	<span class="help-inline"><?php if(isset($view->Errors["celular"])) echo $view->Errors["celular"]; ?></span>
  	</div>  
   	<div class="form-group <?php if(isset($view->Errors["arquivo"])) echo 'has-error'; ?>">  
  		<label for="arquivo">Arquivo</label>
		<input class="form-control" id="arquivo" type="file" name="arquivo" value="<?php echo $view->Model->getNomeArquivo(); ?>"/>
		<span class="help-inline"><?php if(isset($view->Errors["arquivo"])) echo $view->Errors["arquivo"]; ?></span>
  	</div>
    
    <input type="submit" name="btOperacao" class="btn btn-primary" id="btOperacao" value="Enviar arquivo" />
  </p>
  <p>
  </form>  
  </div>
</body>
</html>