<h1>Exo 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<?php
$PorteMonnaie = 200;
$Totale = 152;
$MonnaieRenude = $PorteMonnaie - $Totale; //calculer la monnaie rendue

$billet_de_10= floor($MonnaieRenude / 10); // trouver combien de bilet de 10€ on a dans 48€
$reste = $MonnaieRenude % 10; // attribuer a $reste le reste de la divison (8€)

$billet_de_5 = floor($reste / 5);// repeter le processus jusqu'a la fin.
$reste= $reste % 5;

$piece_de_2 = floor($reste / 2);
$reste = $reste % 2;

$piece_de_1= $reste;  
echo "Montant à payer : $Totale € <br>";
echo "Montant versé : $PorteMonnaie €<br>";
echo "Reste à payer : $MonnaieRenude €<br>";
echo "********************************************<br>";
echo "Rendue de monnaie :<br>";
echo "$billet_de_10 billets de 10€, $billet_de_5 billet de 5€,$piece_de_2 piece de 2€ et $piece_de_1 piece d'un euro <br>";
// je supose que je peux faire une boucle mais j'arrive pas...
?>