<?php

$editbtn = '<button class="btn"><i style="font-size:24px" class="fas">&#xf044;</i></button>';
//$delete_ID = 1;


$deletebtn = '<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
    </svg></button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Biztosan törlöd?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Biztosan törlöd?
                </div>
                <div class="modal-footer">
                <form method="POST">
                    <input type="hidden" name="_METHOD" value="DELETE">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button id="delete" type="submit" onclick="deleteOnclick($row["ID"])" class="btn btn-danger">Törlés</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';


function delete_dolgozo($id,$conn)
{
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE' || ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['_METHOD'] == 'DELETE')) {
        //$id = (int) $_POST['id'];
        //$id = 3;
        $result = mysqli_query($conn, 'DELETE FROM dolgozok WHERE ID=' . $id);
        if ($result !== false) {
            header("index.php");
        }
    }
}
