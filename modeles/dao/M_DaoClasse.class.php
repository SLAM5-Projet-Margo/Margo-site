<?php

class M_DaoClasse extends M_DaoGenerique {


    function __construct() {
        $this->nomTable = "CLASSE";
        $this->nomClefPrimaire = "NUMCLASSE";
    }

    /**
     * Redéfinition de la méthode abstraite de M_DaoGenerique
     * Permet d'instancier un objet d'après les valeurs d'un enregistrement lu dans la base de données
     * @param tableau-associatif $unEnreg liste des valeurs des champs d'un enregistrement
     * @return objet :  instance de la classe métier, initialisée d'après les valeurs de l'enregistrement 
     */
    public function enregistrementVersObjet($enreg) {
        $retour = new M_Classe($enreg['NUMCLASSE'],$enreg['NUMFILIERE'],$enreg['NOMCLASSE']);
        return $retour;
    }

    /**
     * Prépare une liste de paramètres pour une requête SQL UPDATE ou INSERT
     * @param Object $objetMetier
     * @return array : tableau ordonné de valeurs
     */
    public function objetVersEnregistrement($objetMetier) {
        // construire un tableau des paramètres d'insertion ou de modification
        // l'ordre des valeurs est important : il correspond à celui des paramètres de la requête SQL
        $retour = array(
            ':numclasse' => $objetMetier->getNumclasse(),
            ':numfiliere' => $objetMetier->getNumfiliere(),
            ':nomclasse' => $objetMetier->getNomclasse(),
        );
        return $retour;
    }

    public function insert($objetMetier) {
        return FALSE;
    }

    public function update($idMetier, $objetMetier) {
        return FALSE;
    }

}


