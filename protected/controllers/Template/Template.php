<?php


abstract class Pago
{
    abstract protected function pagoConCupon();
    abstract protected function tipoDescuento($cupon);
    
    public function pagoConCupon()
    {
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
        return $document;
    }
/*
    public function tipoDescuentoAplicable()
    {
        
        
    }
        return $document;
    }
*/
}
