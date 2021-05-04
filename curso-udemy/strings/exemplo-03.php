<?php

# MANIPULANDO STRINGS:

$frase = "O amor é a ponte para todas as conquistas.";
$palavra = "para";

# retorna a localização da string:
$parametro = strpos($frase, $palavra);
var_dump($parametro);
echo "<br>";

# retorna apenas a string anterior ao parametro informado:
$texto = substr($frase, 0, $parametro);
echo $texto;
echo "<br>";

# retorna o parametro informado e a string após:
$texto = substr($frase, $parametro);
echo $texto;
echo "<br>";

# retorna apenas a string anterior ao parametro informado:
$texto = substr($frase, $parametro + strlen($palavra), strlen($frase));
echo $texto;
echo "<br>";

?>