<?php

    namespace App/Decorator;

    abstract class Descuento
    {
        public function descuentoCategoria($id_articulo) { return 0; }
        public function descuentoPorcentaje($id_articulo) { return 0; }
    }