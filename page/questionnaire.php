<?php
$niveau ="";
if (!isset($_GET['niveau'])){
    header("location:index.php?page=qcm");
}else{
    $niveau = $_GET['niveau'];
}


$req = ("SELECT * FROM questions WHERE niveau = '$niveau' ORDER BY RAND() LIMIT 10");
$result = mysqli_query($connexion, $req);

?>

<div class="container border border-black">
    <div class="text-center">
        <h1>Formulaire Quiz</h1>
        <p>Soumettez ce formaulaire pour vérifier votre score</p>
    </div>
    <hr>
    <div class="">
        <form action="index.php?page=resultat" method="post">


            <ol>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {

                    $idq = $row["idq"];
                    $req2 = "select * from reponses where idq =" . $idq . " order by RAND()";
                    $res2 = mysqli_query($connexion, $req2);
                ?>
                    <li class="mb-5">
                        <span class="fw-semibold">
                            <?php
                            echo $row["libelleQ"];
                            ?>
                        </span>
                        <ul>
                            <?php
                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                $idr = $row2["idr"];
                                echo "<li class='form-check'>
                            <input class='form-check-input' type='radio' required name='$idq' id='$idq' value='$idr'>
                            <label class='form-check-label' for='$idq'>"
                                    . $row2['libeller'] . "
                            </label>
                        </li>";
                            }
                            ?>

                        </ul>
                    </li>
                <?php
                }
                ?>
            </ol>


            <hr>

            <div class="text-center mb-3 ">
                <a href=""><button type="submit" class="btn btn-success btn-lg">Soumettre</button></a>
            </div>
        </form>

    </div>
</div>