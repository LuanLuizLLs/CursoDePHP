<?php

# ESCOPO DE VARIÁVEIS:

$nome = "Luan";

function escopo1() {
    # o global permite que uma variável fora do escopo seja encontrada.
    global $nome;
    echo $nome." escopo 1";
}

function escopo2() {
    # a variável $nome global não interfere no valor deste escopo.
    $nome = "Luiz";
    echo $nome." escopo 2";
}

escopo1();
echo "<br>";
escopo2();

?>