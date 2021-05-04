<?php 

# UTILIZANDO O INCLUDE E O REQUIRE:

# tem a mesma função do include, porém é mais seguro:
require "exemplo-01.php";

# caso o arquivo já tenha sido incluso ele impede a dublicação do mesmo (também existe o include_once):
require_once "exemplo-01.php";

$resultado = somar(10, 25);
echo $resultado;

?>