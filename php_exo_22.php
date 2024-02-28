<h1>Exo 21</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :
genererCheckbox($elements);</p>

<?php
$tableau=array("Robot","Humain","Autre");

function genererCheckbox($tableau){
    
    echo '<form>';
    echo '<label for="Choix">Faites votre choix</label>','<br>';



foreach($tableau as $choix){

        echo '<input type="checkbox" id="Choix" name="Choix" />',
             '<label for="Choix">'.$choix.'</label>';
             
}
        echo '</form>';
       

}

return genererCheckbox($tableau);

?>