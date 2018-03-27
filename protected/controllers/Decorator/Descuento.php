<?php

    namespace App/Decorator;

    abstract class Descuento
    {
        //Descuento en un rango de fechas para una categoria
        public function descuentoFechaCategoria($id_articulo) { return 0; }
        //Descuento en un rango de fechas para un artículo en específico
        public function descuentoFecha($id_articulo) { return 0; }
        //Descuento por porcentaje para un artículo
        public function descuentoPorcentaje($id_articulo) { return 0; }
        //Descuento por porcentaje para una categoría
        public function descuentoPorcentajeCategoria($id_articulo) { return 0; }
        
    }