<?php

namespace controllers\Template;
use controllers/ProductCategoryController;

class DescuentoXcantidad extends Template
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
        $model=ProductCategory::where('coupon_code',$cupon)->first();
        if ($model->maximum_discount_amount!="")
        {
            $tipoDescuento = "DescuentoXcantidad";
        }
         return $tipoDescuento;
        
    }    

}
