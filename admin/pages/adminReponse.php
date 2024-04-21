<?php
$req = ("SELECT * FROM reponses WHERE idq = ".$_GET['id']."");
$result = mysqli_query($connexion, $req);
?>

<section class="container py-5">
    <div class="d-flex">
        <h3>Liste des reponses</h3>

        <a class="ms-auto" href='index.php?page=ajouter_reponse&id=<?php echo $_GET["id"]; ?>'><button class="btn btn-success">Ajouter réponse</button></a>
    </div>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Description</th>
                <th scope="col">Correct</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo  "<tr>
                <th scope='row'>".$row['idr']."</th>
                <td>".$row['libeller']."</td>
                <td>".($row["verite"]=== "0" ? "Faux" : "Vrai" )."</td> 
                <td>
                    <div>
                       <a href='index.php?page=supprimer_reponse&idr=".$row['idr']."&idq=".$row['idq']."'> <button class='btn btn-outline-danger'><i class='bi bi-trash3-fill'></i></button></a>
                      <a href='index.php?page=modifier_reponse&idr=".$row['idr']."&idq=".$row['idq']."'>  <button  class='btn btn-outline-info'><i class='bi bi-pencil-square'></i></button></a>
                    </div>
                </td>
            </tr>";
            }

            ?>
        </tbody>
    </table>
</section>
