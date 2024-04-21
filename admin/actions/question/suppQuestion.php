<?php
$req = ("DELETE FROM questions WHERE idq = ".$_GET['id']."");
$result = mysqli_query($connexion, $req);
header("Location: index.php?page=admin");
?>