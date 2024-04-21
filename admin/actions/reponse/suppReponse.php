<?php
$req = ("DELETE FROM reponses WHERE idr = ".$_GET['idr']."");
$result = mysqli_query($connexion, $req);
header("Location: index.php?page=modifier&id=".$_GET['idq']);
?>