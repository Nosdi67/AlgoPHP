<h1>Exo 25</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).
</p>
<?php
$tableau=array("Nom"=>"Ex Dupont","Prenom"=>"ex Jean","e-mail"=>"XXXX@XXX.XXX","Ville"=>"Ex Strasbourg");
$tableauGenre=array("Monisuer"=>"Masculin","Madame"=>"Féminin","Mademoiselle"=>"Autre");
$tableauFormation=array(" Développeur Logiciel ", " Designer Web ", " Inégratuer ", " Chef de Projet ");


function Formulaire($tableau,$tableauGenre,$tableauFormation){

    echo '<form>';
    
    foreach($tableau as $SaisirInfo => $exemple){

        echo '<label for="'.$SaisirInfo.'">'.$SaisirInfo.'</label>'," ",
             '<input type="text" name="'.$SaisirInfo.'" id="'.$SaisirInfo.'" value="'.$exemple.'"/>','<br>';
    }
        echo '<br>';
        echo '<br>';
    
        echo '<label for="Choix Genre">Veuillez preciser votre genre</label>','<br>';
        echo '<select name="select" id="Choix Genre" />';
        echo '<option value="">Choisir Genre</option>';
        
        foreach($tableauGenre as $genre => $sexe){

        echo '<option value="'.$sexe.'" >"'.$sexe.'"</option>';
    }
        echo '</select>';
        echo '<br>';
        echo '<br>';
        echo '<label for="Choix Formation">Choix de Formation </label>','<br>';

        foreach($tableauFormation as $formation){

            echo '<input type= "checkbox" name="Choix Formation" id="Choix Formation"/>',
                 '<label for="Choix Formation">'.$formation.'</label>','<br>';

        }

        echo '<input name="Valider" type="submit" value="Envoyer"/>';
        echo '</form>';
}

Formulaire($tableau,$tableauGenre,$tableauFormation);





?>

