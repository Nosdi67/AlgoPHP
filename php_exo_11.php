<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<?php

$tableau =array("Peugeot","Renault","BMW","Mercedes");
$nbr_des_elements = count($tableau);
echo "il y a $nbr_des_elements marques de voitures dans le tableau :<br>";
echo "************************************";
foreach($tableau as $marque){"<br>";
echo "<li>$marque</li>";
}


?>