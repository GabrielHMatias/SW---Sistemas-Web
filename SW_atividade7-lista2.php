<?php
    $sal1 = $_POST['sal1'];
    $sal2 = $_POST['sal2'];
    $media = ($sal1 + $sal2)/2;

    if($media > 2000){ 
        echo $sal1." ".$sal2." Fim do cálculo";;
    }else{
        echo "Fim do cálculo";
    }
?>