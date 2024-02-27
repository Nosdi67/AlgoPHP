<h1>Exo 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>



<?php

$date1=new Datetime("1985-01-17");
$date2=new Datetime("2018-05-21");
$difference= $date1->diff($date2);

echo "l'age est: " . $difference -> y." Ans , ". $difference -> m . " mois, " . $difference -> d. " jours. ";



?>