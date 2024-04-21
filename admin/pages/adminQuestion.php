<?php
$req = ("SELECT * FROM questions");
$result = mysqli_query($connexion, $req);
?>

<section class="container py-5">

<a href="index.php?page=resultat_admin"><button class="btn btn-info">Résultats QCM <i class="bi bi-journal-check"></i></button></a>

    <div class="d-flex mt-3">
        <h3>Liste des questions</h3>

        <a class="ms-auto" href='index.php?page=ajouter'><button class="btn btn-success "> Ajouter Question</button></a>
    </div>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Description</th>
                <th scope="col">Niveau</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo  "<tr>
                <th scope='row'>" . $row['idq'] . "</th>
                <td>" . $row['libelleQ'] . "</td>
                <td>" . ($row["niveau"] === "0" ? "Facile" : "Difficile") . "</td>
                <td>
                    <div>
                       <a href='index.php?page=supprimer&id=" . $row['idq'] . "'> <button class='btn btn-outline-danger'><i class='bi bi-trash3-fill'></i></button></a>
                      <a href='index.php?page=modifier&id=" . $row['idq'] . "'>  <button  class='btn btn-outline-info'><i class='bi bi-pencil-square'></i></button></a>
                    </div>
                </td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</section>