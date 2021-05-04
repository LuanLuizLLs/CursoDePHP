<?php 

# PRECEDÊNCIA DE OPERADOR:

# divisão > adição.
$resultado = 10+4/2;
echo $resultado;
echo "<br>";

# adição > divisão.
$resultado = (10+4)/2;
echo $resultado;
echo "<br>";

# && verifica se todas as condições são verdadeiras.
$resultado = (10+4)/2 > 5 && 10+5 < 3;
var_dump($resultado);
echo "<br>";

# || verifica se uma das condições é verdadeira.
$resultado = (10+4)/2 > 5 || 10+5 < 3;
var_dump($resultado);
echo "<br>";

?>