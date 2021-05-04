<?php 

# MANIPULANDO STRINGS:

$nomeMinusculo = "luan luiz";
$nomeMaiusculo = "LUAN LUIZ";

# enviar string em maiusculo:
echo strtoupper($nomeMinusculo);
echo "<br>";

# enviar string em minusculo:
echo strtolower($nomeMaiusculo);
echo "<br>";

# enviar string com a primeira letra maiuscula:
echo ucfirst($nomeMinusculo);
echo "<br>";

# enviar string com a primeira letra após o espaço maiuscula:
echo ucwords($nomeMinusculo);
echo "<br>";

# alterar uma string por outra:
echo str_replace("L", "R", $nomeMaiusculo);

?>