<!DOCTYPE html>
<html lang="en">

<div class="container-l">
    <div class="row">
        <div class="col mid">
            <h2>Dolgozók</h2>

            <div class="table-responsive w-auto" data-pattern="priority-columns">
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
                            //
                            //
                            if (mysqli_num_rows($records) > 0) {
                                //include "modals.php";
                                while ($row = mysqli_fetch_assoc($records)) {
                                    $counter++;
                                    $munkid = $row["munkakorID"];
                                    $sql_m = "SELECT * FROM munkakorok WHERE munkakorID = " . $munkid;
                                    $munkakor_result = mysqli_query($conn, $sql_m);
                                    $row_munkakor = mysqli_fetch_assoc($munkakor_result);
                                    $munkakor_nev = $row_munkakor["munkakorNev"];

                                    $szervid = $row["szervEgysID"];
                                    $sql_sz = "SELECT * FROM szervegys WHERE szervEgysID =" . $szervid;
                                    $szervegys_result = mysqli_query($conn, $sql_sz);
                                    $row_szervegys = mysqli_fetch_assoc($szervegys_result);
                                    $szervegys_nev = $row_szervegys["szervEgysNev"];


                                    echo    '<tr id="', $row["ID"], '">',
                                    '<td class="mid">', $row["ID"], '</td>',
                                    '<td class="mid">', $row["vezetekNev"], '</td>',
                                    '<td class="mid">', $row["keresztNev"], '</td>',
                                    '<td class="mid">', $munkakor_nev, '</td>', // select from munkakorok
                                    '<td class="mid">', $szervegys_nev, '</td>', // select from szervegys
                                    '<td class="mid">', $row["bruttoBer"], '</td>',
                                    '<td class="mid">', $row["adoazonosito"], '</td>',
                                    '<td class="mid">', $row["TAJ"], '</td>',
                                    '<td class="mid">', $row["bankSzamla"], '</td>',
                                    '<td class="mid"><a href="deleteWorker.php?id=' . $row["ID"] . '" class="btn btn-danger btn-sm">Törlés</a></td>',
                                    '<td class="mid"><a href="test.php?id=' . $row["ID"] . '" class="btn btn-primary btn-sm">Módosítás</a></td>', // add modify button
                                    '</tr>';
                                }
                            } else {
                                echo "0 results ";
                            }
                            // mysqli_close($conn);
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

</html>