<?php
include "connection.php";
include "header.php";
?>

<table class="table table-bordered table-hover">
    <thead>
        <!-- https://jsfiddle.net/u9d1ewsh/ lapozható -->
        <tr>
            <th data-priority="1" class="mid">ID</th>
            <th data-priority="2" class="mid">Munkakör</th>
            <th data-priority="3" class="mid">Törlés</th>
            <th data-priority="4" class="mid">Módosítás</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $sql = "SELECT * FROM munkakorok";
        $records = mysqli_query($conn, $sql);
        $counter = 0;
        if (mysqli_num_rows($records) > 0) {
            while ($row = mysqli_fetch_assoc($records)) {
                echo
                '<tr id="', $row["munkakorID"], '">',
                '<td class="mid">', $row["munkakorID"], '</td>',
                '<td class="mid">', $row["munkakorNev"], '</td>',
                '<td class="mid"><a href="munkakorDelete.php?id=' . $row["munkakorID"] . '" class="btn btn-danger btn-sm">Törlés</a></td>',
                '<td class="mid"><a href="munkakorUpdate.php?id=' . $row["munkakorID"] . '" class="btn btn-primary btn-sm">Módosítás</a></td>', // add modify button
                '</tr>';
                $counter++;
            }
        } else {
            echo "0 results ";
        }
        mysqli_close($conn);
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"><?php echo 'Sorok száma: ', $counter ?></td>
        </tr>
    </tfoot>
</table>

<?php
include "footer.php";

?>