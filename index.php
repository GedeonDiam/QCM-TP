<?php
session_start();
include('service/connect.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>
    <?php
    $page = "";
    if (!isset($_GET["page"])) {
        $page = "connexion";
    } else {
        $page = $_GET["page"];
    }
    switch ($page) {
        case "connexion":
            include "page/connexion.php";
            break;
        case "inscription":
            include "page/inscription.php";
            break;
        case "deconnexion":
            session_destroy();
            header("location:index.php");

            break;
        case "qcm":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"]){
                include "page/header.php";
                include "page/qcm.php";
                break;
            }

        
        case "questionnaire":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"]){
                include "page/header.php";
                include "page/questionnaire.php";
                break;
            }
        case "resultat":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"]){
                include "page/header.php";
                include "page/resultat.php";
                break;
            }
        case "admin":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/pages/adminQuestion.php";
                break;
            }
        case "modifier":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/question/modifQuestion.php";
                break;
            }
        case "supprimer":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/question/suppQuestion.php";
                break;
            }
        case "ajouter":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/question/ajoutQuestion.php";
                break;
            }
        case "ajouter_reponse":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/reponse/ajoutReponse.php";
                break;
            }
        case "modifier_reponse":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/reponse/modifReponse.php";
                break;
            }
        case "supprimer_reponse":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/actions/reponse/suppReponse.php";
                break;
            }
        case "resultat_admin":
            if(isset ($_SESSION["id_users"]) && $_SESSION["email"] && $_SESSION["type"] == "admin"){
                include "page/header.php";
                include "./admin/pages/adminResultat.php";
                break;
            }
        
        default:
            include "page/connexion.php";
            break;
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>