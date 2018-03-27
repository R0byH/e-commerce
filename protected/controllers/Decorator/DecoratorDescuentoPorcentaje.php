<?php

namespace App;

class DecoratorDescuentoPorcentaje extends ModifiedDescuento
{
    public function intelligence()
    {
        return parent::intelligence() * 2;
    }
    public function castSpell($spell)
    {
        return "casts the {$spell} spell";
    }
}