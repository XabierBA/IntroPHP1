// 8 - Hacer la tabla de multiplicar. Vas a necesitar usar bucles for
<br>
<?php
    for($i = 0; $i<=10; $i++){
        echo 'Tabla del '.$i.'  => ';
        for($j=0; $j<=10; $j++){
            echo $i * $j."\n";
        }
        echo '<br>';
    }
?>
