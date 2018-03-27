<?php

namespace App\controllers\State;

class Context extends Abstract
{
    private $estado;
    
    public function setEstado(AbstractState $state)
	{   
        $this->estado = $state;
    }

    public function isDiscount($idProducto)
    {
        return $idProducto;
    }
    
}