<?php 
namespace montadora;

include_once "marcas/Ford.php";
include_once "marcas/Gm.php";
include_once "marcas/Fiat.php";

class Desconto { 

    //  sem strategy 
    // forma com iFs
    public function calcularPreco($montadora, $valor)
    {

        if ($montadora === "Fiat") {

            $fiat = new \Fiat();
            $valorTotal = $fiat->descontoFiat($valor);

        } else if ($montadora === "Ford") {

            $ford = new \Ford();
            $valorTotal = $ford->descontoFor($valor);

        } else if ($montadora === "Gm") {

            $gm = new \Gm();
            $valorTotal = $gm->descontoGm($valor);
        } else {
            echo "serviço invalido";
        }

        return $valorTotal;
    }
}
