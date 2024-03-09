<?php
   if (isset($_POST['boutton'])) {
        include('connect.php');
        //je récupère les informations de l'utilisateur
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        //je lance la requête
        $req = "INSERT INTO user (nom,prenom,mail,mdp) VALUES ('$nom', '$prenom', '$mail', '$mdp')";
        //j'exécute la requête
        $execute = mysqli_query($connexion, $req);
            header("location: index.php?page=qcm");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../style/inscription.css">
</head>
<body>
    <div class="centre">
    <div class="container">
        <form action="#">
            <h2>Inscription</h2>
            <div class="form-group">
                <label for="nom">Nom </label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="mail">Adresse email</label>
                <input type="email" id="mail" name="mail" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" required>
            </div>
            <button type="submit" name="boutton">S'inscrire</button>
            <p><a href="connexion.php">Connectez-vous</a></p>

        </form>
    </div>
    </div>
</body>
</html>
