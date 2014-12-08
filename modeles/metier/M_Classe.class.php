<?php

/**
 * Description of M_Classe
 *
 * @author btssio
 */
class M_Classe {

    private $numclasse; // type : string
    private $numfiliere;
    private $nomclasse;

    function __construct($numclasse,$numfiliere,$nomclasse) {
        $this->numclasse = $numclasse;
        $this->numfiliere = $numfiliere;
        $this->nomclasse = $nomclasse;
    }
    
    public function getNumclasse() {
        return $this->numclasse;
    }

    public function getNumfiliere() {
        return $this->numfiliere;
    }

    public function getNomclasse() {
        return $this->nomclasse;
    }

    public function setNumclasse($numclasse) {
        $this->numclasse = $numclasse;
    }

    public function setNumfiliere($numfiliere) {
        $this->numfiliere = $numfiliere;
    }

    public function setNomclasse($nomclasse) {
        $this->nomclasse = $nomclasse;
    }
}