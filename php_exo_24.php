<h1>Exo 24</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<?php

$tableau=array("Monisuer","Madame","Mademoiselle");

function afficherRadio($tableau){

    echo '<form>';
    echo '<label for="listeChoix">Choix</label>','<br>';



foreach($tableau as $genre){

    echo '<input id="Choix" type="radio" name="genre" value="'.$genre.'" />';
    echo '<label for="Choix"> '.$genre.' </label>';
}
    
    echo '</form>';
}
afficherRadio($tableau);

?>