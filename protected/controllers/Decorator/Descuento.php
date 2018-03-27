<?php

    namespace App\controllers\Decorator;

    abstract class Descuento
    {
        //Descuento en un rango de fechas para una categoria
        public function descuentoFechaCategoria($cupon) { return 0; }
        //Descuento en un rango de fechas para un artículo en específico
        public function descuentoFecha($cupon) { return 0; }
        //Descuento por porcentaje para un artículo
        public function descuentoPorcentaje($cupon,$cantidad,$costoArticulo) { return 0; }
        //Descuento por porcentaje para una categoría
        public function descuentoPorcentajeCategoria($cupon,$cantidad,$costoCategoria) { return 0; }

    }