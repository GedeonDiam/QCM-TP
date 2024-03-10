<?php
$niveau= $_GET['niveau'];

$req = ("SELECT * FROM questions WHERE niveau = '$niveau' ORDER BY RAND()");
$result = mysqli_query($connexion, $req);

while($row = mysqli_fetch_assoc($result)) {
      $idq =$row["idq"];
    $req2 = "select * from reponses where idq =" . $idq." order by RAND()";
    $res2 = mysqli_query($connexion, $req2);
    echo "<h3><li>".$row["libelleQ"]."</li></h3>";
    while($row2 = mysqli_fetch_assoc($res2)) {
        $idr=$row2["idr"];
        echo "<input type='radio' value='$idr' name='$idq' >".$row2["libeller"]."<br>";
    }
}
?>