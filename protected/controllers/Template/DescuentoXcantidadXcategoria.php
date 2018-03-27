<?php

namespace App\controllers\Template;

use App\Models\ProductCategoryDiscountController;

class DescuentoXcantidadXcategoria extends Template
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
        if ($model->maximum_discount_amount!="")
        {
            $tipoDescuento = "DescuentoXcantidadXcategoria";
        }
         return $tipoDescuento;
        
    }    

}
