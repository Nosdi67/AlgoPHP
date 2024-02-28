<h1>Exo 23</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<?php

$url= '<img src="http://my.mobirise.com/data/userpic/764.jpg"></a>';

function repeterImage($url,$nb){

    for($i=0;$i<$nb;$i++){

        echo $url;
  }   
}
    
repeterImage($url,4);

   

      



?>