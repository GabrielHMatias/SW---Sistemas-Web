<?php
    $N1 = $_POST['N1'];
    $N2 = $_POST['N2'];
    $soma = $N1 + $N2;
    if($soma > 20){
         echo $N1." ".$N2;
    }
?>