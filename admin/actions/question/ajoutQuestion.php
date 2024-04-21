<?php
if (isset($_POST['envoye'])) {
    $libelle = $_POST['libelle'];
    $niveau = $_POST['niveau'];

    $req = ("INSERT INTO questions (niveau, libelleQ) VALUES ('".$niveau."', '".$libelle."')");
    $result = mysqli_query($connexion, $req);
    header("Location: index.php?page=admin");
}

?>

<section class="container py-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="niveau" class="form-label">Niveau</label>

            <select class='form-select' name='niveau'>
                <option value='0'>Facile</option>
                <option value='1'>Difficile</option>
            </select>

        </div>
        <div class="mb-3">
            <label for="libelle" class="form-label">Libelle</label>
            <textarea class="form-control" name="libelle" rows="3"></textarea>
        </div>

        <div>
            <button type="submit" name="envoye" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</section>