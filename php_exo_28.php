<h1>Exo 28</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>

<?php

class Voitures{         //creation de la classe Voiture 
    
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private int $_vitesseActuelle;
    private $_etat;



public function __construct($_marque,$_modèle,$_nbPortes,){  //construction de function

    $this->_marque=$_marque;
    $this->_modèle=$_modèle;
    $this->_nbPortes=$_nbPortes;
    $this->_vitesseActuelle=0;
    $this->_etat="Stoppé";
    
}
public function getMarque(){        //Les Getter

        return  "la marque est: ".$this->_marque. '<br>';
}
public function getMoèle(){

        return "Le modèle est " .$this->_modèle. '<br>';
}
public function getNbPortes(){

        return "Le Nombre de porte est " .$this->_nbPortes. '<br>';
}
public function getVitesse(){

        return "La Vitesse est de " .$this->_vitesseActuelle. ' km '. '<br>';     
    
}
public function getEtat(){

        return $this->_etat;
}


public function getInfo(){   // un Getter d'info globale 

        return  "Info Vehicule " . $this->_marque . '<br>'.
                "*************************". '<br>'.
        
               
                " Marque de la Voiture: " . $this->_marque . '<br>'.
                " Modèle de la Voture: " . $this->_modèle . '<br>'.
                " Nombre de portes: " .$this->_nbPortes . '<br>'.
                " Le Vehicule " . $this->_marque . " " . $this->_modèle . " est " . $this->_etat . '<br>'. 
                " La Vitesse du véhicule " . $this->_marque . " ".  $this->_modèle. " est de ". $this->_vitesseActuelle . ' Km' . '<br>';
}





public function setEtat($_etat){  // les Setter

    $this->_etat=$_etat;
}

public function setAccelerateur($_vitesse){

    if($this->_etat != " Démarré "){  // si la voiture n'est pas démmaré elle pourra pas avancer

        echo " Pour Accélèrer il faut d'abord démarrer le Vehicule! ". '<br>';    

    }else{
        $this->_vitesseActuelle=$_vitesse; //la valeur saisie de la $vitesse sera attribuée a la vitesseActuelle
        echo  " Le Véhicule " . $this->_marque . " demarre " . '<br>';
        echo " Le Véhicule " . $this->_marque . " veut accélèrer de "  . $_vitesse . " Km ";
    }      

}

public function SetRalentisseur(int $_vitesse){ 

        $this->_vitesseActuelle=$this->_vitesseActuelle-$_vitesse ; //calcule ralentissement

        if($this->_vitesseActuelle<0){  // si la valeure est inferieur a 0 (-30km par ex), afficher 0km
           $this->_vitesseActuelle=0;
            echo  "La vitesse du véhicule est de: ".$this->_vitesseActuelle . ' km';
        }else{

            echo " Le Véhicule " . $this->_marque . " ralentit de " . $_vitesse .  ' km ' . '<br>' ;      //si non afficher le resultat de la soustraction
}
}
}
$voiture1= new Voitures("Peugeot","408","5"); // les classes Voitures
$voiture2= new Voitures("Citroen","C4","3");




$voiture1->setEtat(" Démarré ");
$voiture1->setAccelerateur(30);


echo $voiture1->getInfo();




 





?>