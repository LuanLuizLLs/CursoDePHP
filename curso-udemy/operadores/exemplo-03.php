<?php

# OPERADORES DE COMPARAÇÃO:

$a = 55;
$b = 55.0;

# maior.
var_dump($a > $b);
echo "<br>";

# maior ou igual.
var_dump($a >= $b);
echo "<br>";

# menor.
var_dump($a < $b);
echo "<br>";

# menor ou igual.
var_dump($a <= $b);
echo "<br>";

# igualdade de valor.
var_dump($a == $b);
echo "<br>"; 

# igualdade de identidade.
var_dump($a === $b);
echo "<br>";

# valor diferente.
var_dump($a != $b);
echo "<br>";

# identidade diferente.
var_dump($a !== $b);
echo "<br>";

# spaceship ou nave espacial (retorna 1 para maior, 0 para igual e -1 para menor).
var_dump($a <=> $b);
echo "<br>";

# null coalesce.
$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e;
echo "<br>";

?>