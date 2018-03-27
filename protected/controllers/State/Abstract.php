<?php

namespace App\controllers\State;

Abstract class Abstract
{
    
    public abstract function isDiscount($idProducto);
    
    public  function setEstado(AbstractState $state)
    {
        return $state;
    }

 }
