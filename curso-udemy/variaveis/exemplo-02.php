<?php 

#TIPO DE DADOS:

#BÁSICOS:
#string:
$nome = "HCode";
$site = 'www.hcode.com.br';

#integer:
$ano = 1998;

#float:
$salario = 1700.00;

#boolean:
$verificar = false;

#COMPOSTOS:
#array: 
$compras = array("Arroz", "Feijão", "Leite");

echo $compras[0];
echo "<br>";

#object:
$nascimento = new DateTime();

#ESPECIAIS:
#resource:
$arquivo = fopen("exemplos.php", "r");

#null:
$nulo = null;

?>