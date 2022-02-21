// 7 - Crea un select en HTML y añade los números del 1 al 10 como options.
<br>

<html>
    <select>
        <?php
            for($i = 0;$i <=10;$i++){
                echo "<option>".$i."</option>";
            }
        ?>


    </select>

</html>

