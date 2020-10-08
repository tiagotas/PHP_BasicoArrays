<?php
//  i | value
// [0] Joao
// [1] José
// [2] Maria
// [3] Joana

$lista_nome = array("Joao", "José", "Maria", "Joana");

reset($lista_nome);

while(key($lista_nome) !== null) {

    $item_atual = current($lista_nome);

    echo "Olá " . $item_atual . "<br />";

    next($lista_nome);
}

echo "<hr />";

foreach( $lista_nome as $item_atual)
{
    echo "Olá " . $item_atual . "<br />";
}