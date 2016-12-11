<table border="1">
<?php for($tr = 1; $tr <= $rows; $tr++): ?>
    <tr>
        <?php for($td = 1; $td <= $cols; $td++): ?>
            <td><?= $td * $tr ?></td>
        <?php endfor ?>
    </tr>
<?php endfor; ?>
</table>