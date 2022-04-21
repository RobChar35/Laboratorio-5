<?php
    /*
        El programa se encarga de calcular el precio de total de la compra
        de gaseosas hacha.
    */

    //Datos ingresados
    $precio_gaseosa = $_POST['precio_gaseosa'];
    $unidades = $_POST['unidades'];

    //Datos de cálculo
    $nuevo_precio = $precio_gaseosa - ($precio_gaseosa * 0.05);
    echo 'El nuevo precio de la gaseosa es un 5% menos.'.'<br>';
    echo 'El nuevo precio es: '.'s/.'.'<b>'.$nuevo_precio.'</b>'.'<hr>';

    //Total a pagar
    $importe_compra = $nuevo_precio * $unidades;
    echo 'El importe de la compra es: '.'s/.'.'<b>'.$importe_compra.'</b>'.'<hr>';

    $importe_descuento = $importe_compra - ($importe_compra * 0.07);
    $redondear_resultado = round($importe_descuento, 2);
    
    echo 'El importe con descuento es un 7% menos.'.'<br>';
    echo 'El importe total a pagar con el descuento es: '.'s/.'.'<b>'.$redondear_resultado.'</b>'.'<hr>';

    //Obsequio
    $obsequio = $unidades * 2;
    echo 'Se obsequia dos caramelos por cada gaseosa adquirida'.'<br>';
    echo 'El total de caramelos obsequiados es: '.'<b>'.$obsequio.'</b>';

?>