<h1>Exo 30</h1>

<p>En utilisant les ressources de la page <strong>http://php.net/manual/fr/book.filter.php</strong>, vérifier si une
adresse e-mail a le bon format</p>

<?php

$email="test.email@gmail.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){ /*filter_var permet de verifier differentes info 
                                             (voir https://www.php.net/manual/fr/filter.filters.validate.php)*/
                          
    echo " l'adresse e-mail est validé";

}else{

    echo " l'ardresse e-mail n'est pas valide! ";
}


?>