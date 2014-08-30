<?php

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
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>Arquivo
    <input type="file" name="arquivo" />
  </p>
  <p>
    <input type="submit" name="btOperacao" id="btOperacao" value="Enviar arquivo" />
  </p>
  <p>
  </form>
</body>
</html>