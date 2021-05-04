<?php 

# DECLARANDO UMA VARIÁVEL:

$nome = "Hcode";

var_dump($nome);
echo "<br>";

# como nomear as variáveis.
$anoNascimento = 1998;
$nomeCompleto = "Luan Luiz";

# correto:
$nome1 = "Luan";
$nome_1 = "Luan";

# incorreto: 
# $1nome = "Luan";
# $nome-1 = "Luan";
# $this (variável pré-definida);

# apagando uma variável:
$teste = "Teste";

echo $teste;
echo "<br>";

# apaga a variável.
unset($teste);

# verifica se a variável foi definida. 
if (isset($teste)) {
    echo $teste;
}

# concatenação:
$nome = "Luan";
$sobrenome = "Luiz";
$nomeCompleto = $nome." ".$sobrenome;

echo $nomeCompleto;
echo "<br>";

?>