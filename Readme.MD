# Proyecto Final - M&oacute;dulo de cupones (semi e-commerce)

#### Maestrante: Ing. Cesar Roberto Herbas Delgadillo

## ARQUITECTURA DE LA APLICACIÓN:

La aplicaci&oacute;n est&aacute; estructurada en una arquitectura cliente servidor.

## PATRONES :

### Template ###

Este patr&oacute;n es utilizado para los pagos que incluyan cupones (Si se realiz&oacute; un cago con cup&oacute;n, se analizará si el articulo coprado tiene algun descuento, si no se paga con un cup&oacute;n no hay derecho alguno a descuentos)

### Decorator ###

Este patr&oacute;n es utilizado para calcular el descuento que se aplicará (si amer&iatuce;a) por la compra; en caso de que haya alg&uacute;n descuento el monto del mismo será considerado en el momento de calcular el total a pagar.

### State ###

Este patr&oacute;n es utilizado para determinar si un producto se encuentra activo para aplicar un descuento o si esta inactivo (no se aplica descuento).

### Iterator ###

Este patr&oacute;n es utilizado para calcular el monto a pagar por la compra, considerando si tiene o no descuento, fue considerado  para hacer compras de diversos articulos pero el cupon se aplicaría solo una vez, para un artículo o para una categoría (depende del cupón).
(Aún no está aplicado, aún estoy revisando la documentación para ver la mejor manera de implementarlo)


## TOMAR EN CUENTA :

Al ser un propotipo, la funcionalidad no es completa y se tomó como un primer parámetro que los descuentos solo se hacen por medio de un cupon, al cual se consideró que puede tener una fecha de validez o no (es decir una fecha por la que se aplica el descuento del cupón), en caso de no tener validez ver si el descuento se aplicará por la cantidad de productos comprados (de esta manera se aplicará un descuento porcentual), las mismas consideraciones se tendrán para aplicar el descuento por categoria (Fecha y cantidad de pedidos)

Me surgieron varias dudas y por el tiempo ya no pude consultarte respecto a los descuentos:

Lo que entendí con los descuentos es:

    * Por fecha (Para un Artículo o para una Categoria)
    * Por Porcentaje cuando el total llegue a un monto límite (Para un Artículo o para una Categoria)
    
Pero mis dudas vinieron al considerar que un cupon solo es usado una vez si la compra se la realiza en el rango de vigencia del cupon, si esta en vigencia se aplicaría un descuento al articulo o categoria (segun corresponda) ya sea por porcentaje o por cantidad de articulos. 

En este punto me enredé demasiado y tuve que rehacer varias veces los patrones.