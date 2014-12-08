<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Utilisateur
 *
 * @author btssio
 */
class C_Enseignant extends C_ControleurGenerique {
    
    function afficherLesEnseignants() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/enseignant/centreListeEnseignant.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Enseignants");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $perso = $daoPers->getEnseignant();
        
        $this->vue->ecrireDonnee("listeEnseignant",$perso);
        $this->vue->afficher();
    }
}
