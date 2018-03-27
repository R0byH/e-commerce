<?php

namespace App\Controllers\Decorator;

use App\Models\ProductDiscountController;

class DecoratorDescuentoXFecha extends ModifiedDescuento
{
    public function descuentoFecha($cupon)
    {
        $fechaActual= date('d/m/Y');

        $monto_descuento = parent::descuentoFecha($cupon);

        //consultar el descuento por categoría para este cupon
        $model=ProductDiscount::where('coupon_code',$cupon)->first();
        $valid_from = $model->valid_from;
        $valid_until = $model->valid_until;
        if (($valid_from>=$fechaActual)&&($fechaActual=<$valid_from))
            $monto_descuento = $model->discount_value;

        return $monto_descuento;
    }
}