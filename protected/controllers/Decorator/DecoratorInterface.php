<?php

namespace controllers\Decorator;


interface DecoratorInterface
{
    /**
     * @return mixed
     */
    public function descuentoPorcentaje();

    /**
     * @param $subtotal
     * @return mixed
     */
    public function descuentoPeriodo($id_producto);    

    /**
     * @param $subtotal
     * @return mixed
     */
     public function descuentoCategoria($subtotal);

}