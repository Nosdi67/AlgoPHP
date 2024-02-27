<h1>Exo 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<?php

class personne{
    private $_nom;
    private $_prenom;
    private $_date_de_naissance;

    public function__construct($_nom,$_prenom,$_date_de_naissance){

                        $this->_nom=$nom;
                        $this->_prenom=$_prenom;
                        $this->_date_de_naissance=$_date_de_naissance;
    }   
    public function getinfo(){

                       return $this->_nom;
                       return $this->_prenom;
                       return $this->_date_de_naissance;
                }   

    }
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;

    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

    echo $p1->getinfo();

?>