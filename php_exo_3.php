<h1>EXO 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ».
 Afficher l’ancienne et la nouvelle phrase.</p>


<?php

$phrase_1 = "Notre formation DL commence aujourd'hui";
$nvPhrase = str_replace("aujourd'hui", "demain", $phrase_1);
echo $nvPhrase;
?>
<br>

<?php
echo $phrase_1
?>