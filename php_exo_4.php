<h1>EXO 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<?php
$phrase_1 = "Engage le jeu que je le gagne";
$phrase_2 = $phrase_1 ;
$phrase_2 = strtolower($phrase_2);
$phrase_2 = strrev($phrase_2);
$phrase_2 = str_replace(' ','',$phrase_2);

if($phrase_2 == strrev($phrase_2)){
    echo "La phrase « $phrase_1 » est palindrome";
} else { 
   echo "La phrase saisie n'est pas palindrome";
}
// c'est bon je crois
?>