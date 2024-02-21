<h1>Exo 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<?php
$agehomme= 12;
$ageFemme= 14;
$sexe = "H";
if($sexe == "F" && $ageFemme >18 && $ageFemme <=36){
    echo "Age : $ageFemme <br>";
    echo "Sexe : $sexe <br>";
    echo "la personne est imposable";

}elseif($sexe== "H" && $agehomme >= 20){
    echo "Age : $agehomme <br>";
    echo "Sexe : $sexe <br>";
    echo "la personne est imposable";

} else{
    echo "Age : $agehomme <br>";
    echo "Sexe : $sexe <br>"; 
    echo "la personne n'est pas imposable";
}
?>