<h1>EXO 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<?php

$phrase_1 = "Notre formation DL commence aujourd'hui";
$compteurMots = str_word_count($phrase_1);
echo "La phrase « $phrase_1 » contient $compteurMots mots.";

?>