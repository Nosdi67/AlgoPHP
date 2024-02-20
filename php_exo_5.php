<h1>EXO 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php

$argent = 100; 
$ValeurFrancEnEuro = 0.1524 ;
$Resultat = ($argent * $ValeurFrancEnEuro) ;
echo "Montant en francs : $argent";
?>
<br>
<?php
echo "$argent franc =  $Resultat" ;
?>