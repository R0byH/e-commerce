<?php

namespace App\controllers\State;

use App\Models\ProductPricing;

class ActiveState extends AbstractState
{
    
    public function isDiscount($idProducto)
    {

      $Activo= ProductPricing::where('product_id',$idProducto)->first();
         
        if ($Activo->in_active=="1")
        {  
            return ['Se puede aplicar descuento'];
        }
        else
        return ['No esta activo el producto'];
    }
   public function setEstado(AbstractState $state)
	{   
        static::$estado = $state;
    }
    
}