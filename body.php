<!DOCTYPE html>
<html lang="en">

<div class="container-l">
    <div class="row">
        <div class="col mid">
            <h2>Dolgozók</h2>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <form method="POST">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <!-- text középre igazítani vertikális és horizontálisan -->
                                        <!-- https://jsfiddle.net/u9d1ewsh/ lapozható -->
                                        <tr>
                                            <th data-priority="1" class="mid">ID</th>
                                            <th data-priority="2" class="mid">Vezetéknév</th>
                                            <th data-priority="3" class="mid">Keresztnév</th>
                                            <th data-priority="4" class="mid">Munkakör</th>
                                            <th data-priority="5" class="mid">Szervezeti <br> egység</th>
                                            <th data-priority="6" class="mid">Bruttó bér</th>
                                            <th data-priority="7" class="mid">Adóazonosító</th>
                                            <th data-priority="8" class="mid">Taj</th>
                                            <th data-priority="9" class="mid">Bankszámlaszám</th>
                                            <th data-priority="11" class="mid">Törlés</th>
                                            <th data-priority="10" class="mid">Módosítás</th>
                                        </tr>
                                    </thead>
                                    <!-- modal -->
                                    <!-- Button trigger modal -->

                                    <tbody>
                                        <?php
                                        require "connection.php";
                                        $sql = "SELECT * FROM dolgozok";
                                        $records = mysqli_query($conn, $sql);
                                        $counter = 0;
                                        if (mysqli_num_rows($records) > 0) {
                                            include "modals.php";
                                            while ($row = mysqli_fetch_assoc($records)) {
                                                $counter++;
                                                echo    '<tr id="', $row["ID"], '">',
                                                '<td>', $row["ID"], '</td>',
                                                '<td>', $row["vezetekNev"], '</td>',
                                                '<td>', $row["keresztNev"], '</td>',
                                                '<td>', $row["munkakorID"], '</td>', // select from munkakorok
                                                '<td>', $row["szervEgysID"], '</td>', // select from szervegys
                                                '<td>', $row["bruttoBer"], '</td>',
                                                '<td>', $row["adoazonosito"], '</td>',
                                                '<td>', $row["TAJ"], '</td>',
                                                '<td>', $row["bankSzamla"], '</td>',
                                                '<td><a href="deleteWorker.php?id=' . $row["ID"] . '" class="btn btn-danger btn-sm">Törlés</a></td>',
                                                '<td>', include "test.php", '</td>', // add modify button
                                                '</tr>';
                                            }
                                        } else {
                                            echo "0 results ";
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="11"><?php echo 'Sorok száma: ', $counter ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>
                        </div>
                        <!--end of .table-responsive-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>