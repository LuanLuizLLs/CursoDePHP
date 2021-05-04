<?php

# UTILIZANDO O INCLUDE E O REQUIRE:

# inclui a função no documento:
include "exemplo-01.php";

# caso o arquivo esteja dentro de uma pasta dentro do diretório atual:
// include "inc/exemplo-01.php";

# caso o arquivo esteja fora do diretório atual:
// include "../inc/exemplo-01.php";

$resultado = somar(10, 25);
echo $resultado;

?>