<div class="container border border-black">
    <div class="text-center">
        <h1>Formulaire Quiz</h1>
        <p>Soumettez ce formulaire pour vérifier votre score</p>
    </div>
    <hr>
    <form action="" method="post">
        <ol>
            <?php
            $score = 0;
            $totalQuestions = 0;

            foreach ($_POST as $idq => $idr) {
                $req = "SELECT * FROM questions WHERE idq= $idq";
                $res = mysqli_query($connexion, $req);

                if ($row = mysqli_fetch_assoc($res)) {
                    $totalQuestions++;
                    echo "<li class='mb-5'>";
                    echo "<span class='fw-semibold'>" .$row["libelleQ"] . "</span>";
                    echo "";

                    $req2 = "SELECT * FROM reponses WHERE idr= $idr";
                    $res2 = mysqli_query($connexion, $req2);

                    if ($row2 = mysqli_fetch_assoc($res2)) {
                        echo "<p>Votre reponse est: " .$row2['libeller'] . "</p>";
                    }

                    $req3 = "SELECT * FROM reponses WHERE verite= 1 AND idq= '$idq'";
                    $res3 = mysqli_query($connexion, $req3);

                    while ($row3 = mysqli_fetch_assoc($res3)) {
                        echo "<p>La bonne réponse est : " . $row3["libeller"] . "</p>";
                        if ($row3['idr'] == $idr) {
                            $score++; // Augmente le score pour chaque réponse correcte
                        }
                    }
                    echo "";
                    echo "</li>";
                }
            }
            ?>
        </ol>
        <hr>
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white" id="basic-addon1">Score</span>
            <input type="text" class="form-control" value="<?php echo $score . "/" . $totalQuestions; ?>" aria-label="Score" aria-describedby="basic-addon1" readonly>
        </div>
    </form>
</div>
