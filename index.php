<?php

use montadora\Desconto;

include_once "montadoras/Desconto.php";

$carro = new Desconto();

echo $carro->calcularPreco("Ford", 1000);
echo "\n";
echo $carro->CalcularPreco("Gm",100);

?>