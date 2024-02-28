<h1>Exo 16</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<?php

$text="Mon texte en parametre";
$text2="Mon text en Rouge";

function convertirMajRouge ($text){

    $text=strtoupper($text);
    echo '<span style="color: red;">'. $text .'</span>';
}
convertirMajRouge($text) ."<br>". convertirMajRouge($text2) ;

?>