

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
</head>
<body>
<?php
$page= "";
if (!isset($_GET["page"])) {
 $page="connexion";
}else{
    $page=$_GET["page"];
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
            include "page/qcm.php";
            break;
            case "questionnaire":
                include "page/questionnaire.php";
                break;
    default:
        include "page/connexion.php";
        break;
}
?>
</body>
</html>
