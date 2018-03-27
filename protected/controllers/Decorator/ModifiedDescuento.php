<?php

namespace App/Decorator;
abstract class ModifiedDescuento
{
    protected $descuento;
    public function __construct(Descuento $descuento)
    {
        $this->descuento = $descuento;
    }

    public function descuentoFechaCategoria($cupon) { return $this->descuento->descuentoFechaCategoria($cupon); }
    public function descuentoFecha($cupon) { return $this->descuento->descuentoFecha($cupon); }
    public function descuentoPorcentajeCategoria($id_articulo) { return $this->descuento->descuentoPorcentajeCategoria($id_articulo); }
    public function descuentoPorcentaje($id_articulo) { return $this->descuento->descuentoPorcentaje($id_articulo); }

}