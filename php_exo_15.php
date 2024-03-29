<h1>Exo 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<?php

class personne{
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
 

    public function __construct($_nom,$_prenom,$_dateDeNaissance){

                        $this->_nom=$_nom;
                        $this->_prenom=$_prenom;
                        $this->_dateDeNaissance=new DateTime($_dateDeNaissance); /*Convertir le $ en date pour pouvoir 
                                                                                   bien l'utiliser au moment de l'affichage*/
                        
    }  

            public function getinfo(){

                            return $this->_nom . " " . $this->_prenom . " " . " née le " .  $this->_dateDeNaissance->format('Y-m-d');
                            // recuperer les info.
                        }   
            
            public function getage(){

                                $_age=$this->_dateDeNaissance->diff(new DateTime());// DateTime vide pour utiliser la date du jour.
                                echo " " . $_age->y. " ans "; //age->y pour afficher l'age (44 "ans")
            }
 
            }

    $p1 = new personne("DUPONT", "Michel", "1980-02-19") ; //creation d'une nouvelle classe 
    $p2 = new personne("DUCHEMIN", "Alice", "1985-01-17") ;
    

    echo $p1->getinfo() . "," ;
    echo " " . $p1->getage();
    echo "<br>";
    echo $p2->getinfo() . "," ;
    echo " " . $p2->getage() ;
    

?>