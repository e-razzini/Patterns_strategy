<?php
namespace montadoras;

include_once "marcas/Ford.php";
include_once "marcas/Gm.php";
include_once "marcas/Fiat.php";

// strategy
// Interface
interface MontadoraMarca
{
    public function calculaDesconto(float $valor): float;
}

//concrete Strategy

// ford
class Ford implements MontadoraMarca
{

    function calculaDesconto(float $valor): float
    {
        $ford = new \Ford();
        $valorTotal = $ford->descontoFor($valor);
        return $valorTotal;
    }
}


// Gm
class Gm implements MontadoraMarca
{
    public function calculaDesconto(float $valor): float
    {
        $gm = new \Gm();
        $valorTotal = $gm->descontoGm($valor);
        return $valorTotal;
    }
}

//fiat 
class Fiat implements MontadoraMarca{
    public function calculaDesconto(float $valor): float
    {
        $wl = new \Fiat();
        $valorTotal = $wl->descontoFiat($valor);
        return $valorTotal;
    }
}
// fim concrete strategy

//context 

class Desconto
{

    
  private $montadora;

  function __construct(MontadoraMarca $montadora)  
  {
      $this->montadora =$montadora;


  }
  function calcula($valor){
      
      $valorTotal =  $this->montadora->calculaDesconto($valor);
      return $valorTotal;
    }
    
    
}
 
