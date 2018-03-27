<?php

namespace App\controllers\State;

class ContextState extends AbstractState
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