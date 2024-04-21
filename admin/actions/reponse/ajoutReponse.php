<?php
if (isset($_POST['envoye'])) {
    $libeller = $_POST['libeller'];
    $verite = $_POST['verite'];

    $req = "INSERT INTO reponses (verite, libeller, idq) VALUES ('".$verite."', '".$libeller."', '".$_GET['id']."')";
    $result = mysqli_query($connexion, $req);
    header("Location: index.php?page=modifier&id=".$_GET['id']."");
}

?>

<section class="container py-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="verite" class="form-label">Correct</label>

            <select class='form-select' name='verite'>
                <option value='0'>Faux</option>
                <option value='1'>Vrai</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="libeller" class="form-label">Libelle</label>
            <textarea class="form-control" name="libeller" rows="3"></textarea>
        </div>

        <div>
            <button type="submit" name="envoye" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</section>