<h1>Exo 20</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<?php


function afficherInput($nomsInput){
 
    echo '<form>';
    
    foreach($nomsInput as $info){

    echo '<label for="' .$info.'"> ' .$info. ': </label>','<br>',
         '<input type="text" id="' .$info. '" name="'.$info.'" ><br>';
}
    echo '</form>';    
}
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
?>

