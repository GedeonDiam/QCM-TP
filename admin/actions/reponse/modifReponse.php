<?php
$req = "SELECT * FROM reponses WHERE idr = ".$_GET["idr"];

$result = mysqli_query($connexion, $req);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['envoye'])){
    $libeller = $_POST['libeller'];
    $verite = $_POST['verite'];

    $req = "UPDATE reponses SET verite = '".$verite."', libeller = '".$libeller."' WHERE idr = '".$_GET["idr"]."'";

    $result = mysqli_query($connexion, $req);
    header("Location: index.php?page=modifier&id=".$_GET['idq']);
}

?>

<section class="container py-5">
    <form action="" method="post">
    <div class="mb-3">
        <label for="verite" class="form-label">Correct</label>
        <?php 
        $verite = $row["verite"];
        $text = "";
        
        if($verite == 0){
            $text = "Faux";
        }else{
            $text = "Vrai";
        }

        echo "
        <select class='form-select' name='verite'>
            <option value='' disabled>Choisissez une option</option> <!-- Option désactivée pour inviter l'utilisateur à choisir -->
            <option value='0'" . ($row["verite"] === "0" ? " selected" : "") . ">Faux</option>
            <option value='1'" . ($row["verite"] === "1" ? " selected" : "") . ">Vrai</option>
        </select>";

        ?>
    </div>
    <div class="mb-3">
        <label for="libeller" class="form-label">Libelle</label>
        <?php 

        echo '<textarea class="form-control" name="libeller"  rows="3">'.$row["libeller"].'</textarea>';

        ?>
    </div>

    <div>
        <button type="submit" name="envoye" class="btn btn-primary">Modifier</button>
    </div>
    </form>

</section>