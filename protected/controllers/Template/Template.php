<?php

namespace App\controllers\Template;

abstract class Template
{
    abstract protected function pagoRealizado();
    abstract protected function tipoDescuento($cupon);
    
    public function pagoConCupon()
    {
        $tipoDescuento = 0;
        $haycupon = $this->pagoRealizado();
        if ($haycupon)
        { 
            echo "Puede tener descuento";
            $tipoDescuento = $this->tipoDescuento($cupon);
            //tipoDescuentoAplicable($haycupon)           
        }
        else{
            echo "No tiene descuento";
        }
        
    }
        return $tipoDescuento;
}
/*
    public function tipoDescuentoAplicable()
    {
        
        
    }
        return $tipoDescuento;
    }
*/
}
