<h1>Exo 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales</p>

<?php
 
$tableau_notes=array(10,12,8,19,3,16,11,13,9);
$notes=implode(" ",$tableau_notes); /* imploade affiche la quantité d'un tableau. faut mettre une virgule ou espace et 
                                        ensuite le tableau qu'on veut executer */

$somme=array_sum($tableau_notes);

$moyenne= $somme/count($tableau_notes);

$moyenne_decimale=number_format($moyenne,2);

echo "les notes de l'eleve sont: $notes <br>";
echo "la moyenne de l'eleve est: $moyenne_decimale <br>";


?>