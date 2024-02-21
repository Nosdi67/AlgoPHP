<h1>EXO 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
<?php

function Calcule($PrixUnitaire, $Qt, $TxTVA){
    $PrixHT = $PrixUnitaire * $Qt;
    $TVA = $PrixHT * ($TxTVA/100);
    $resultat = $TVA + $PrixHT ;
    return $resultat;
}
echo "Prix unitaire de l’article : 9.99 €<br>";
echo "Quantité : 5<br>";
echo "Taux de TVA : 0.2<br>";
echo  Calcule(9.99, 5, 20);
?>