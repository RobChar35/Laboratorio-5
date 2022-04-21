<?php
    /*
        El programa se encarga de calcular el sueldo total en base
        a los datos ingresados en el documento 'salary_form.html'.
    */

    //Datos ingresados
    $total_vendido = $_POST['total_vendido'];
    $cantidad_hijos = $_POST['cantidad_hijos'];

    //Datos de cálculo
    $sueldo_basico = 600;

    echo 'El sueldo basico es: '.'s/.'.'<b>'.$sueldo_basico.'</b>'.'<br>';
    echo 'El total vendido es: '.'s/.'.'<b>'.$total_vendido.'</b>'.'<br>';
    echo 'El cantidad de hijos es de: '.'<b>'.$cantidad_hijos.'</b>'.'<hr>';

    $bonificacion = $cantidad_hijos * 50;
    echo 'La bonificacion por hijos es de s/.50.'.'<br>';
    echo 'El total es de: '.'s/.'.'<b>'.$bonificacion.'</b>'.'<hr>';

    $comision = $total_vendido * 0.075;
    echo 'La comision es del %7.5 del total vendido.'.'<br>';
    echo 'El total es de: '.'s/.'.'<b>'.$comision.'</b>'.'<hr>';

    $sueldo_bruto = $sueldo_basico + $bonificacion + $comision;
    echo 'El sueldo bruto es la suma del sueldo basico mas la bonificacion y la comision.'.'<br>';
    echo 'El total es de: '.'s/.'.'<b>'.$sueldo_bruto.'</b>'.'<hr>';

    //Sueldo total
    $descuento = $sueldo_bruto * 0.11;
    echo 'El descuento es el %11 del sueldo bruto.'.'<br>';
    echo 'El total es de: '.'s/.'.'<b>'.$descuento.'</b>'.'<hr>';

    $sueldo_total = $sueldo_bruto - $descuento;

    echo 'El sueldo total es la resta del sueldo bruto menos el descuento.'.'<br>';
    echo 'El sueldo total es: '.'s/.'.'<b>'.$sueldo_total.'</b>';

?>