<?php
    $codigo = $_POST['codigo'];
    $horas = $_POST['horas'];
                
    if($horas > 50){
        $SE = ($horas - 50) * 20.00;
        $SB = 50 * 10.00;
        $ST = $SB + $SE;
        echo $codigo." ".$ST;
    }else{
        $SB = $horas * 10.00;
        echo $codigo." ".$SB;

    }
                   
?>