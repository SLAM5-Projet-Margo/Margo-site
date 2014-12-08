<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Filiere
 *
 * @author kbouchet
 */
class C_Filiere extends C_ControleurGenerique {
    
    function afficherLesFilieres() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/filiere/centreListeFiliere.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Filières");
        $this->vue->ecrireDonnee("titreSection","Liste des filières");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
        
        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->setPdo($pdo);
        $this->vue->ecrireDonnee('lesFiliere', $daoFiliere->getAll());
        
        $this->vue->afficher();
    }
}
