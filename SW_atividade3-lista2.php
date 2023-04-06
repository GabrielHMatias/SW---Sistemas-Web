<?php
    $Kg = $_POST['Kg'];

    if($Kg > 50){
        echo ($Kg - 50) * 4;
    }else{
        echo "Sem excesso";
    }
?>