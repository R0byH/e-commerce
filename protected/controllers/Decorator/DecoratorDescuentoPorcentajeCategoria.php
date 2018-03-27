<?php

namespace App/Decorator;
use controllers/ProductCategoryDiscountController;

class DecoratorDescuentoPorcentajeCategoria extends ModifiedDescuento
{
    public function descuentoPorcentajeCategoria($cupon,$cantidad,$costo)
    {
        $fechaActual= date('d/m/Y');

        $monto_descuento = parent::descuentoPorcentajeCategoria($cupon,$cantidad,$costo);

        //consultar el descuento por categoría para este cupon
        $model=ProductCategoryDiscount::where('coupon_code',$cupon)->first();
        $cantidad = $this->request->quantity; //$this->request->quantity es la cantidad de articulos
        $cantidadminima = $model->minimum_order_value;
        if($cantidad >= $cantidadminima)
        {
            $monto_descuento = $this->request->total/10; //$this->request->total es el costo antes del descuento El costo del descuento es 10%
        }
        
        return $monto_descuento;
    }
}
