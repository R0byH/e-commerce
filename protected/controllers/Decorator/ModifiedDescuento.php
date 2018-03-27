<?php

namespace App\Controllers\Decorator;

abstract class ModifiedDescuento
{
    protected $descuento;
    public function __construct(Descuento $descuento)
    {
        $this->descuento = $descuento;
    }

    public function descuentoFechaCategoria($cupon) { return $this->descuento->descuentoFechaCategoria($cupon); }
    public function descuentoFecha($cupon) { return $this->descuento->descuentoFecha($cupon); }
    public function descuentoPorcentaje($cupon,$cantidad,$costoArticulo) { return $this->descuento->descuentoPorcentajeCategoria($cupon,$cantidad,$costoArticulo); }
    public function descuentoPorcentajeCategoria($cupon,$cantidad,$costoCategoria) { return $this->descuento->descuentoPorcentaje($cupon,$cantidad,$costoCategoria); }

}