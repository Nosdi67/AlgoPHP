<h1>Exo 29</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :<br>
<br>Peugeot 408 : $v1 = new Voiture("Peugeot","408");
<br>
<br>BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
<br>
<br>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
<br>
<br>echo $v1->getInfos();
<br>
<br>echo $ve1->getInfos();
</p>


<?php

class Voiture{    //creation de la classe Voiture (classe mère) 
    
    private $_marque;
    private $_modèle;
   

public function __construct($_marque,$_modèle){  //construction de function

    $this->_marque=$_marque;
    $this->_modèle=$_modèle;
  
}

public function getinfo(){ //getter d'information

    echo "La marque du véhicule: " .$this->_marque. '<br>',
         "Le modèle du véhicule: " .$this->_modèle. '<br>';

}
}

class VoitureElec extends Voiture{ //classe enfant qui herite de ses attributs et de ses methodes
    
    private $_autonomie;

public function __construct($_marque,$_modèle,$_autonomie){

    parent::__construct($_marque,$_modèle);// preciser qu'on recupère les attributs de la classe mère Voiture

    $this->_autonomie=$_autonomie;

}

public function  getinfo()
{       
    parent::getinfo();// preciser qu'on va recupèrer la methode getInfo avec les attributs qui vont avec.
    
    echo  "Le véhicule a: " .$this->_autonomie. " Heures d'autonomie ". '<br>'; /* ajout d'attribut locale "_autonomie "
                                                                                qui appartient uniquement a la classe VoitureElec*/
}

}
$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

$v1->getinfo(). '<br>'; 
echo '<br>';
$ve1->getinfo(). '<br>';



?>