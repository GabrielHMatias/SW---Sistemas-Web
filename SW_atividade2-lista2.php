<?php
    $N1 = $_POST['N1'];
    $N2 = $_POST['N2'];

    if($N1 > $N2){
        echo $N1." ".$N2;
    }else{
        echo $N2." ".$N1;
    }
?>