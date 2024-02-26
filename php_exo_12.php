<h1>Exo 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<?php

$tableau_langues=array("Bonjour","Hello","Hola");

$tableau_prenom=array(
                 "Anne"=>"fr",
                 "Rose"=>"en",
                 "Raquel"=>"esp");

foreach($tableau_prenom as $prenom => $langue){
    
    switch ($langue){
         case "fr":
            echo "$tableau_langues[0], $prenom<br>";
         break;
         case "en":
            echo "$tableau_langues[1], $prenom<br>";
         break;
        
         case "esp";
            echo "$tableau_langues[2], $prenom<br>";
        }           
}


?>