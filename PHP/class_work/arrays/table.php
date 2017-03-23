<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 20.03.2017
 * Time: 20:25
 */


$tableone = range(1, 10, 1);

?>

<table border = "1" cellpadding="5" align="center">
    <thead>
        <tr>
            <td></td>
            <?php foreach ($tableone as $number) {?>
            <td>
                <?= $number?>
            </td>>
            <?php }?>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($tableone as $numberRow) { ?>
    <tr>

        <td><?php $numberRow ?></td>
                <?php foreach ($tableone as $numberCell) {?>
        <td><?= $numberRow * $numberCell ?></td>
        <?php }?>
    </tr>
    <?php }?>
    </tbody>
</table>
