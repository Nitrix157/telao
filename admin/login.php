<?php

error_reporting(0);

ini_set("display_errors", 0 );

session_start();

if ($_SESSION['logado'] == true){
   session_destroy();
   session_start();
}

$_SESSION['logado'] = false;
$_SESSION['p'] = false;


if (isset($_POST['logar'])){

   $usuario = explode("\n", file_get_contents("usuariotela.txt"))[0];
   $senha   = explode("\n", file_get_contents("senhatela.txt"))[0];


   if ($usuario == $_POST['usuario'] and $senha == $_POST['senha']){

      $_SESSION['logado'] = true;

      header('location: /admin/');

   } else {

      $_SESSION['p'] = true;

   }

}


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
    background-image: url(imagens/fundo.png);
    background-size: cover;
}

.box1 {
    background-color: rgba(0,0,0,.6);
    padding: 3%;
    margin: 4% 4%;
    border-radius: 7px;
    box-shadow: 1px -1px 7px red, -1px 1px 7px red;
}

.titulo {
    text-align: center;
    text-shadow: 3px -3px 7px red, -3px 3px 7px red;
    font-size: 22px;
    font-weight: 900;
    color: white;
    opacity: 1;
}

hr {
    margin: 10px 5%;
    border-color: red;
}

input {
    border: 1px solid black;
    background-color: rgba(0,0,0,.7);
    padding: 5px 10px;
    font-size: 12px;
    cursor: pointer;
    border-color: white;
    border-radius: 4px;
    color: red;
    margin: 0px 11%;
    width: 78%;
    height: 30px;
    text-shadow: 2px -2px 8px red, -2px 2px 8px red;
    box-shadow: 1px -1px 8px red, -1px 1px 8px red;
}

input:focus {
    outline: 0;
    border-color: red;
}

.btn {
    border: 1px solid black;
    background-color: rgba(0,0,0,.7);;
    padding: 5px 10px;
    font-size: 15px;
    cursor: pointer;
    border-color: white;
    border-radius: 5px;
    color: white;
    margin: 15px 0 15px 0;
    width: 90%;
    height: 30px;
    text-shadow: 3px -3px 8px red, -3px 3px 8px red;
    -webkit-box-shadow: 2px -2px 8px red, -2px 2px 8px red;
}

.btn:hover {
    background-color: white;
    border-color: black;
    color: black;
}

.titulo-input {
    text-shadow: 1px -1px 14px red, -1px 1px 14px red;
    font-size: 14px;
    font-weight: 900;
    color: white;
    opacity: 1;
    margin: 10px 0 0 15%;
}

.erro {
    text-shadow: 1px -1px 1px white, -1px 1px 1px white, 1px -1px 1px white, -1px 1px 1px white;
    font-size: 17px;
    font-weight: 900;
    color: red;
    opacity: 1;
    margin: 10px;
    text-align: center;
}

@media all and (min-width: 600px) {
input {
    width: 50%;
    margin: 5px 25%;
}
.btn {
    width: 60%;
}
hr {
    width: 60%;
    margin: 10px 20%;
}
.titulo-input {
    margin: 10px 0 0 26%;
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
      <form method="post" autocomplete="off">
         <div class="titulo-input">
            * Usuário:
         </div>
         <input name="usuario" type="text" placeholder="Digite seu usuário" required/>
         <div class="titulo-input">
            * Senha:
         </div>
         <input name="senha" type="password" placeholder="Digite sua senha" required/>
         <p class="erro">
            <?php
               if ($_SESSION['p'] == "erro"){
                  echo "Senha incorreta!";
               }
            ?>
         </p>
         <center>
            <button type="submit" class="btn" name="logar">
               ..:: Fazer Login ::..
            </button>
         </center>
      </form>
   </div>
</body>
</html>
