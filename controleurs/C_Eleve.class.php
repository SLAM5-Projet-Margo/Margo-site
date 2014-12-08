<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Eleve
 *
 * @author kbouchet
 */
class C_Eleve extends C_ControleurGenerique {
    
    function afficherLesEleves() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/eleve/centreListeEleve.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Elèves");
        $this->vue->ecrireDonnee("titreSection","Liste des élèves");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $perso = $daoPers->getEleve();
        
        $this->vue->ecrireDonnee("listeEleve",$perso);
        $this->vue->afficher();
    }
}
