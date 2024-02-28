<h1>Exo 17</h1>

<p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>


<?php

$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

ksort($capitales);
echo
        "<table><thead>
        <tr>
        <th>Pays</th>
        <th>Capitales</th>           
        </tr>
        </thead>"."<tbody>";

foreach($capitales as $pays => $capitale){

    

    echo"<tr>
         <td>" . $pays . "</td>
         <td>" . $capitale ."</td>                           
         </tr>";
    
    
    
    
         
        }
        
        echo "</tbody></table>";
?>

