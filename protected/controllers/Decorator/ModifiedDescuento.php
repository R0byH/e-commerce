<?php

namespace App/Decorator;
abstract class ModifiedDescuento
{
    protected $descuento;
    public function __construct(Descuento $descuento)
    {
        $this->descuento = $descuento;
    }

    public function descuentoFecha($id_articulo) { return $this->descuento->descuentoFecha($id_articulo); }
    public function descuentoCategoria($id_articulo) { return $this->descuento->descuentoCategoria($id_articulo); }
    public function descuentoPorcentaje($id_articulo) { return $this->descuento->descuentoPorcentaje($id_articulo); }

}