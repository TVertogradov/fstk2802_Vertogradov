//13. Вывести таблицу умножения

<table><tr>
        <?php
        for ($i=0;$i<=10;$i++) {
            echo "<td>";
            for ($z=0;$z<=10;$z++) {
                echo $i.'*'.$z.'='.($i*$z).'<br>'; }
            echo "</td>";
        }
        ?>
    </tr></table>