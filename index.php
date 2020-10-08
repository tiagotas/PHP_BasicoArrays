<?php
//  i | value
// [0] Joao
// [1] José
// [2] Maria
// [3] Joana

$lista_nome = array();

$lista_nome[] = "Joao";
$lista_nome[] = "José";
$lista_nome[] = "Maria";
$lista_nome[] = "Joana";

echo count($lista_nome);

echo "<hr />";

echo $lista_nome[3]; // Joana

echo "<hr />";

$total_lista_nome = count($lista_nome); // 4

for($i=0; $i < $total_lista_nome; $i++)     // $i = $i + 1;      => $i++
{
    echo "Olá, " . $lista_nome[$i] . "<br />";
}


//var_dump($lista_nome);


