<?php

namespace App/Decorator;
use controllers/ProductCategoryController;

class DescuentoCategoria extends ModifiedDescuento
{
    public function descuentoCategoria($idarticulo)
    {
        $fechaActual= date('d/m/Y');

        $monto_descuento = parent::descuentoCategoria($idarticulo);

        //consultar el descuento por categoría para este artículo
        $model=ProductCategoryDiscount::model()->findByPk($idarticulo);
        $valid_from = $model->valid_from;
        $valid_until = $model->valid_until;
        if (($valid_from>=$fechaActual)&&($fechaActual=<$valid_from))
            $monto_descuento = $model->discount_value;

        return $monto_descuento;
    }
}