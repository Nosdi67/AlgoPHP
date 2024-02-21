<h1>EXO 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>
<br> 
<br> 
<p>Boucle <em>For</em></p>
<?php
for ($x = 0; $x <= 10; $x++) {
    $resulat = $x * 8;
    echo "$x * 8 = $resulat <br>" ;
} 
?>
<br> 
<br>
<p>Boucle <em>Do...While</em></p>
<?php
$y = 0; 
do { // quand je mets <=10 ici la multiplication s'arrete a 11 jsp pq
    $produit= $y * 9;
    echo "$y * 9 = $produit <br>";
    $y++;
} while ($y <= 10)


?>