<h1>Exo 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<?php


$tableau_prenom=array(
                 "Anne"=>"fr", 
                 "Rose"=>"en",
                 "Raquel"=>"esp");
                 ksort($tableau_prenom); //ksort c'est pour trier le tableau selon les clés.
foreach($tableau_prenom as $prenom => $langue){
    
    switch ($langue){
         case "fr":
            echo "Bonjour, $prenom<br>";
         break;
         case "en":
            echo "Hello, $prenom<br>";
         break;
         case "esp":
            echo "Hola, $prenom<br>";
        }           
}
echo "<pre>";

echo "<pre>";
print_r($tableau_prenom);
?>