<h1>Exo 26</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<?php

function formaterDateFr($date = ""){

    $formatter = new IntlDateFormatter(
        'fr_FR', //Local FR
        IntlDateFormatter::FULL,//Format de date complet
        IntlDateFormatter::NONE,//Format d'heure non affiche (SHORT,FULL,NONE)
        'Europe/Paris',//Fuseau horaire
        IntlDateFormatter::GREGORIAN //Calendrier Gregorian
    );
    $date = new DateTime(($date));
    $DateEnChaine=$formatter->format($date);
    echo $DateEnChaine;    

}

formaterDateFr("2001-01-01");
?>