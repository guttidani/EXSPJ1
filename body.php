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
                                        <th data-priority="10" class="mid">Módosítás</th>
                                        <th data-priority="11" class="mid">Törlés</th>
                                    </tr>
                                </thead>
                                <!-- modal -->
                                <!-- Button trigger modal -->

                                <tbody>
                                    <?php
                                    require "connection.php";
                                    $sql = "SELECT * FROM dolgozok";
                                    $records = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($records) > 0) {
                                        include "modals.php";

                                        while ($row = mysqli_fetch_assoc($records)) {
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
                                            '<td>', $editbtn, '</td>', // add modify button
                                            '<td>', $deletebtn, '</td>', // delete button
                                            '</tr>';
                                        }
                                    } else {
                                        echo "0 results ";
                                    }



                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5"><?php echo 'Sorok száma: ', mysqli_num_rows($records) ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--end of .table-responsive-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>