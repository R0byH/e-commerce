<?php

namespace App\Template;

use protected/controllers/ProductCategoryDiscountController;

class DescuentoXfechaXcategoria extends Template
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
        $model=ProductCategoryDiscount::where('coupon_code',$cupon)->first();
        if (($model->valid_from!="")&&($model->valid_until!=""))
        {
            $tipoDescuento = "DescuentoXfechaXcategoria";
        }
         return $tipoDescuento;
        
    }    

}
