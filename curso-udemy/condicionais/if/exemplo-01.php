<?php

# ESTRUTURA CONDICIONAIS:

$idade = 35;
$criança = 12;
$maior = 18;
$idoso = 65;

echo "Idade: ".$idade;
echo "<br>";

# utilizando if e else:
if ($idade < $criança) {
    echo "É uma criança";
} else {
    echo "Não é uma criança";
}

echo "<br>";

# utilizando else if:
if ($idade < $criança) {
    echo "Criança";
} else if ($idade < $maior) {
    echo "Adolescente";
} else if ($idade < $idoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

# operador ternário (chamado de if de uma linha só):
echo ($idade < $maior) ? "Menor de idade":"Maior de idade";


?>