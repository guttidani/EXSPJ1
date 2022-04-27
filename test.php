<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Módosítás</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dolgozó adatainak módosítása</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="w-auto">
                <!-- idejöhet a form -->
                <form id="createWorkerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div id="errorShowDiv"></div>
                    <div>
                        <div class="mid" style="font-size: 30px;">Dolgozó felvétele </div><br>
                        <div class="mid">A csillaggal jelölt mezőket kötelező kitölteni</div><br>
                        <!-- név -->
                        <div>
                            <div class=" input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-s">Vezetéknév</span>
                                <input id="vezetekNev" name="vezetekNev" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-s" placeholder="*Kovács" required>
                            </div>
                            <div class="input-group input-group-sm mb-3 inputField">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Keresztnév</span>
                                <input id="keresztNev" name="keresztNev" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="*István" required>
                            </div>
                        </div>
                        <!-- munkakorok dropdowns -->
                        <div class="dropdown inputField">
                            <select class="form-select" aria-label="Default select example" id="munkakorID" name="munkakorID" onchange="submitSetEnable()" required>
                                <option value=0 selected>Munkakörök</option>
                                <?php
                                $sql_m = "SELECT * FROM munkakorok";
                                $records_m = mysqli_query($conn, $sql_m);

                                if (mysqli_num_rows($records_m) > 0) {
                                    while ($row_m = mysqli_fetch_assoc($records_m)) {
                                        echo '<option class="dropdown-item" value="', $row_m["munkakorID"], '">', $row_m["munkakorNev"], '</option>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!-- szervegyseg dropdowns -->
                        <div class="dropdown inputField">
                            <select class="form-select" aria-label="Default select example" id="szervEgysID" name="szervEgysID" onchange="submitSetEnable()" required>
                                <option value=0 selected>Szervezeti egységek</option>
                                <?php
                                $sql_s = "SELECT * FROM szervegys";
                                $records_s = mysqli_query($conn, $sql_s);

                                if (mysqli_num_rows($records_s) > 0) {
                                    while ($row_s = mysqli_fetch_assoc($records_s)) {
                                        echo '<option class="dropdown-item" value="', $row_s["szervegysID"], '">', $row_s["szervEgysNev"], '</option>';
                                    }
                                } else {
                                    echo "0 results ";
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!-- Bruttóbér -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bruttóbér</span>
                            <input id="bruttoBer" maxlength="9" name="bruttoBer" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="123 456 Ft/hónap*" required>
                        </div>
                        <!-- adóazonosító -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Adóazonosító</span>
                            <input id="adoazonosito" name="adoazonosito" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="10" maxlength="10" placeholder="0123456789*" required>
                        </div>
                        <!-- TAJ -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">TAJ szám</span>
                            <input id="TAJ" name="TAJ" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="9" maxlength="9" placeholder="123 456 789*" required>
                        </div>
                        <!-- Bankszámlaszám -->
                        <div class="input-group input-group-sm mb-3 inputField">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Bankszámla szám</span>
                            <input id="bankszamlaszam" name="bankszamlaszam" type="text" class="form-control noSpinner" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" minlength="24" maxlength="24" placeholder="00001111-22223333-44445555*" required>
                        </div>
                        <br>
                        <!-- gombok -->
                        <div class="mid">
                            <button id="createWorkerBtn" type="submit" class="btn btn-primary" disabled>Mentés</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id="megseBtn" type="reset" class="btn btn-primary">Mégse</button>
                            <!-- gombok -->
                            <br>
                            <?php
                            // update sql
                            
                            ?>
                        </div>
                    </div>
                </form>
                <!-- form vége -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Mentés</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
            </div>
        </div>
    </div>
</div>