

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
    <link rel="stylesheet" href="../style/inscription.css">
    <link rel="stylesheet" href="../style/connexion.css">
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
        include "page/deconnexion.php";
        break;
        case "qcm":
            include "page/qcm.php";
            break;
    default:
        include "page/connexion.php";
        break;
}
?>
</body>
</html>
