# Proyecto Final - M&oacute;dulo de cupones (semi e-commerce)
#### Maestrante: Ing. Alejandra Pamenla Sivila Padilla
#### Maestrante: Ing. Cesar Roberto Herbas Delgadillo

## ARQUITECTURA DE LA APLICACIÓN:

La aplicaci&oacute;n est&aacute; estructurada en una arquitectura cliente servidor.


## M&Oacute;DULOS IDENTIFICADOS DE LA APLICACI&Oacute;N:

Para el funcionamiento se identific&oacute; los siguientes modelos con sus respectivos patrones para su desarrollo:


## PATRONES :

### Template ###

Este patr&oacute;n es utilizado para los pagos que incluyan cupones (Si se realiz&oacute; un cago con cup&oacute;n, se analizará si el articulo coprado tiene algun descuento, si no se paga con un cup&oacute;n no hay derecho alguno a descuentos)

### Iterator ###

Este patr&oacute;n es utilizado para calcular el monto a pagar por la compra, considerando si tiene o no descuento.

### Decorator ###

Este patr&oacute;n es utilizado para calcular el descuento que se aplicará (si amer&iatuce;a) por la compra; en caso de que haya alg&uacute;n descuento el monto del mismo será considerado en el momento de calcular el total a pagar.