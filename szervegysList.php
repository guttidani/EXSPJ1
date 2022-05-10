<?php
include "connection.php";
include "header.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Szervezetiegységek</title>
</head>

<body>
<h2 class="mid">Szervezetiegységek</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <!-- https://jsfiddle.net/u9d1ewsh/ lapozható -->
            <tr>
                <th data-priority="1" class="mid">ID</th>
                <th data-priority="2" class="mid">Szervezetiegység</th>
                <th data-priority="3" class="mid">Törlés</th>
                <th data-priority="4" class="mid">Módosítás</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "connection.php";
            $sql = "SELECT * FROM szervegys";
            $records = mysqli_query($conn, $sql);
            $counter = 0;
            if (mysqli_num_rows($records) > 0) {
                while ($row = mysqli_fetch_assoc($records)) {
                    echo
                    '<tr id="', $row["szervegysID"], '">',
                    '<td class="mid">', $row["szervegysID"], '</td>',
                    '<td class="mid">', $row["szervEgysNev"], '</td>',
                    '<td class="mid"><a href="szervegysDelete.php?id=' . $row["szervegysID"] . '" class="btn btn-danger btn-sm">Törlés</a></td>',
                    '<td class="mid"><a href="szervegysUpdateForm.php?id=' . $row["szervegysID"] . '" class="btn btn-primary btn-sm">Módosítás</a></td>', // add modify button
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
                <td class="mid" colspan="4"><?php echo 'Sorok száma: ', $counter ?></td>
            </tr>
        </tfoot>
    </table>
</body>

<?php
include "footer.php";

?>