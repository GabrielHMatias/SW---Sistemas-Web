<?php
    $numero = $_POST['numero'];

    if($numero > 100){
        echo $numero;
    }else{
        echo "0";
    }
?>