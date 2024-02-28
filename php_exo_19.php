<h1>Exo 19</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<?php

$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

ksort($capitales);
echo
        "<table><thead>
        <tr>
        <th>Pays</th>
        <th>Capitales</th> 
        <th>Lien</th>          
        </tr>
        </thead>"."<tbody>";

foreach($capitales as $pays => $capitale){

    

    echo"<tr>
         <td>" . $pays . "</td>
         <td>" . $capitale ."</td> 
         <td> <a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank' rel='noopener noreferrer'>Lien</a>      
         </tr>";
    
    
    
    
         
        }
        
        echo "</tbody></table>";
?>

