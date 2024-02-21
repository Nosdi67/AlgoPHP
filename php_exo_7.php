<h1>EXO 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<?php
$Age_Enfant = 2;

if ( $Age_Enfant >= 10 && $Age_Enfant <= 11){
    echo "categorie Minime";
} elseif ($Age_Enfant >= 6 && $Age_Enfant <= 7 ){
    echo "Categorie Poussin";
} elseif ($Age_Enfant >= 8 && $Age_Enfant <=9 ){
    echo "Categorie Pupille";
} elseif ($Age_Enfant >= 12 ){
    echo "Categorie Cadet";
} else {
   echo "Votre enfant n'a pas l'age requit pour integrer notre institution désolé";
}


?>