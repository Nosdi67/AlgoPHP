<h1>Exo 21</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.<br>
<br>
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p>




<?php

function alimenterListeDeroulante($elements){

    echo    '<form>';
    echo    '<label for= "Genre-sexe" "Genre " </label>',
            '<select name="Genres" id="Genre-sexe">',
            '<option value=""> Choisir </option>';
    
    foreach($elements as $genre){

        echo
             '<option value="'.$genre.'">'.$genre.'</option>';
             
    }
    echo '</form>','</select>';
}


$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);
?>