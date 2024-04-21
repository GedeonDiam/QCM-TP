<div class="container border border-black">
    <div class="text-center">
        <h1>Formulaire Quiz</h1>
    </div>
    <hr>
    <form action="" method="post">
        <ol>
            <?php
            $score = 0;
            $totalQuestions = 0;
            $incorrectQuestions = array(); // Stocke les identifiants des questions incorrectes

            foreach ($_POST as $idq => $idr) {
                $req = "SELECT * FROM questions WHERE idq= $idq";
                $res = mysqli_query($connexion, $req);

                if ($row = mysqli_fetch_assoc($res)) {
                    $totalQuestions++;
                    $req2 = "SELECT * FROM reponses WHERE idr= $idr";
                    $res2 = mysqli_query($connexion, $req2);

                    if ($row2 = mysqli_fetch_assoc($res2)) {
                        $req3 = "SELECT * FROM reponses WHERE verite= 1 AND idq= '$idq'";
                        $res3 = mysqli_query($connexion, $req3);

                        $correct_answers = array();
                        while ($row3 = mysqli_fetch_assoc($res3)) {
                            $correct_answers[] = $row3["libeller"];
                        }

                        if (!in_array($row2['libeller'], $correct_answers)) {
                            // Stocke l'ID de la question incorrecte
                            $incorrectQuestions[] = $idq;
                            echo "<li class='mb-5'>";
                            echo "<span class='fw-semibold'>" . $row["libelleQ"] . "</span>";
                            echo "<p>Votre réponse incorrecte : " . $row2['libeller'] . "</p>";
                            echo "<p>La bonne réponse est : " . implode(", ", $correct_answers) . "</p>";
                            echo "</li>";
                        } else {
                            $score++; // Incrémenter le score pour chaque réponse correcte
                        }
                    }
                }
            }
            foreach ($incorrectQuestions as $idq) {
                // Récupérez l'ID de l'utilisateur à partir de $_SESSION 
                $userId = $_SESSION['id_users'];
                
                // Assurez-vous que $idr est récupéré à partir de la boucle foreach précédente
                $idr = $_POST[$idq];
            
                // Insérez les données dans la table resultat 
                $insertQuery = "INSERT INTO resultat (id_users, id_questions, user_answer, is_correct) VALUES ('$userId', '$idq', '$idr', false)";
                mysqli_query($connexion, $insertQuery);
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
