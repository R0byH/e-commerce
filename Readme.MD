# Proyecto Final - M&oacute;dulo de cupones (semi e-commerce)
#### Maestrante: Ing. Alejandra Pamenla Sivila Padilla
#### Maestrante: Ing. Cesar Roberto Herbas Delgadillo

## ARQUITECTURA DE LA APLICACIÓN:

La aplicaci&oacute;n est&aacute; estructurada en una arquitectura cliente servidor.


## M&Oacute;DULOS IDENTIFICADOS DE LA APLICACI&Oacute;N:

Para el funcionamiento se identific&oacute; los siguientes modelos con sus respectivos patrones para su desarrollo:


## PATRONES :

*Decorator (patrón estructural) (con una clase descuento y las subclases descuento_producto con un método de descuentoproducto(idproducto) y descuento_categoria con un metodo descuentocategoria() y la subclase descuento_producto_categoria la cual tendría los anteriores métodos)

*Template Method para realizar los descuentos ( descuento(monto a descontar) )

*Iterator para ver quizas la cantidad de compras realizadas con un individuo o quizas las compras realizadas que puedan generar algun descuento.
