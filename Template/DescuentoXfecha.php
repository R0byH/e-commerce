<?php

namespace App\Template;
use protected/controllers/ProductDiscountController;

class DescuentoXfecha extends Template
{
    protected function pagoConCupon()
    {
        return true;
    }

    protected function tipoDescuento($cupon)
    {
        $tipoDescuento = "";
        $monto_descuento = parent::descuentoCategoria($cupon);
        
        //consultar si el cupon tiene fechas registradas para aplicar el descuento
        $model=ProductDiscount::where('coupon_code',$cupon)->first();
        if (($model->valid_from!="")&&($model->valid_until!=""))
        {
            $tipoDescuento = "DescuentoXfecha";
        }
         return $tipoDescuento;
        
    }    

}
