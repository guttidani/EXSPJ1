<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>


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
                                <tbody>
                                    <?php
                                    require_once "connection.php";
                                    $sql = "SELECT * FROM dolgozok";
                                    $records = mysqli_query($conn, $sql);

                                    $editbtn = '<button class="btn"><i style="font-size:24px" class="fas">&#xf044;</i></button>';

                                    $deletebtn = '<button type="button" class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg></button>';

                                    //$delete_sql = 'DELETE FROM dolgozok WHERE ID =' + (string)$row["ID"];

                                    if (mysqli_num_rows($records) > 0) {
                                        while ($row = mysqli_fetch_assoc($records)) {
                                            echo    '<tr>',
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>