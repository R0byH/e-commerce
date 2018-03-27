<?php

namespace App\controllers\State;

use App\Models\ProductPricing;

class Inactive extends Abstract
{
    
    public function isDiscount($idProducto)
    {

      $Inactive= ProductPricing::where('product_id',$idProducto)->first();
         
        if ($Inactive->in_active=="0")
        {  
            return ['No se puede aplicar descuento'];
        }        
    }
    public function setEstado(AbstractState $state)
	{   
        static::$estado = $state;
    }
    
}