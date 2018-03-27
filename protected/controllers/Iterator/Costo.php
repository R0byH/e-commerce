<?php

namespace App\controllers\Iterator;

class Costo
{
    protected $title, $rating;
    
    public function __construct($producto, $cantidad)
    {
        $this->producto = $producto;
        $this->cantidad = $cantidad;
    }

    public function producto()
    {
        return $this->producto;
    }
    
    public function cantidad()
    {
        return $this->cantidad;
    }
}