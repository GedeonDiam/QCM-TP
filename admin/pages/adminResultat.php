<?php
$reqUser = 'SELECT * FROM users INNER JOIN resultat ON resultat.id_users = users.id_users';
$resultUser = mysqli_query($connexion, $reqUser);
?>

<section class="container py-5">
    <h3>Liste des résultats</h3>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nb trouvé</th>
                <th scope="col">Nb total</th>
                <th scope="col">Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($resultUser)) {
                echo "<tr>
                    <th scope='row'>" . $row['id_users'] . "</th>
                    <td>" . $row['nom'] . "</td>
                    <td>" . $row['prenom'] . "</td>
                    <td>" . $row['correct'] . "</td>
                    <td>" . $row['total_reponse'] . "</td>
                    <td>" . $row['correct'] . " / ".$row['total_reponse']."</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</section>
