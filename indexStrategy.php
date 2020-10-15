<?php

include_once "montadoras/DescontoContext.php";

$ford = new \montadoras\Ford();
$Gm = new \montadoras\Gm();
$Wolks = new \montadoras\Fiat();

echo "<h2>" . $ford->calculaDesconto(4500.00) . "</h2>";
