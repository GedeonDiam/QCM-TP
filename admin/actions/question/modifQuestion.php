<?php
$req = ("SELECT * FROM questions WHERE idq =".$_GET["id"]."");
$result = mysqli_query($connexion, $req);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['envoye'])){
    $libelle = $_POST['libelle'];
    $niveau = $_POST['niveau'];

    $req = ("UPDATE questions SET niveau = '".$niveau."', libelleQ = '".$libelle."' WHERE idq =".$_GET["id"]."");
    $result = mysqli_query($connexion, $req);
    header("Location: index.php?page=admin");
}

?>

<section class="container py-5">
    <form action="" method="post">
    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau</label>
        <?php 
        $niveau = $row["niveau"];
        $text = "";
        
        if($niveau == 0){
            $text = "Facile";
        }else{
            $text = "Difficile";
        }

        echo "
        <select class='form-select' name='niveau'>
            <option value=".($row["niveau"])."selected >".$text."</option>
            <option value='0'>Facile</option>
            <option value='1'>Difficile</option>
        </select>";

        ?>
    </div>
    <div class="mb-3">
        <label for="libelle" class="form-label">Libelle</label>
        <?php 

        echo '<textarea class="form-control" name="libelle"  rows="3">'.$row["libelleQ"].'</textarea>';

        ?>
    </div>

    <div>
        <button type="submit" name="envoye" class="btn btn-primary">Modifier</button>
    </div>
    </form>
<hr>
    <?php
    include './admin/pages/adminReponse.php';

    ?>
</section>