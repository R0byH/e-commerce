<?php

namespace App\Controllers\Decorator;

use App\Models\ProductDiscountController;

class DecoratorDescuentoPorcentaje extends ModifiedDescuento
{
    public function descuentoPorcentaje($cupon,$cantidad,$costo)
    {
        $fechaActual= date('d/m/Y');

        $monto_descuento = parent::descuentoPorcentaje($cupon,$cantidad,$costo);

        //consultar el descuento por categoría para este cupon
        $model=ProductDiscount::where('coupon_code',$cupon)->first();
        $cantidadminima = $model->minimum_order_value;
        if($cantidad >= $cantidadminima)
        {
            $monto_descuento = $costo/10; //$this->request->total es el costo antes del descuento El costo del descuento es 10%
        }
        
        return $monto_descuento;
    }
}
