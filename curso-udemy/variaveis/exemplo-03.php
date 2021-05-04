<?php

# VARIÁVEIS PRÉ-DEFINIDAS:

# recebe as variáveis de um formulário.
$nome = $_GET["nome"];
$idade = (int)$_GET["idade"];

var_dump($nome);
var_dump($idade);
echo "<br>";

# informa o ip do usuário.
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;
echo "<br>";

# informa o local do documento.
$usuario = $_SERVER["SCRIPT_NAME"];

echo $usuario;

?>