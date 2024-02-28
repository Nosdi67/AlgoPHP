<h1>Exo 20</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<?php
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
   
echo
    '<label for="Nom">'Nom'<input type="text"></label><br>'


    '<label for="Prenom">'Prenom'<input type="text"></label><br>' 
    
    
    '<label for="Villa">'Ville'<input type="text"></label><br>;

}


?>

   