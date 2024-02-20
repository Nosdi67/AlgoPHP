<h1>EXO 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<?php
$phrase_1 = "Engage le jeu que je le gagne";
$phrase_1 = strtolower($phrase_1);
$phrase_1 = str_replace(' ','', $phrase_1);
$phrase_1 = strrev($phrase_1);

if($phrase_1 == ){
    echo "La phrase « Engage le jeu que je le gagne » est palindrome";
} else {
    echo "NUL";
}
// c'est incomplet encore...
?>