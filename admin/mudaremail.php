<?php

error_reporting(0);

ini_set("display_errors", 0 );

session_start();

if ($_SESSION['logado'] !== true){
   header('Location: /admin/login.php');
}

$_SESSION["continua"] = true;

$arq = fopen("envioemail.txt", "w");
fwrite($arq, $_POST["email"]);
fclose($arq);

header("location: /admin/");

?>
