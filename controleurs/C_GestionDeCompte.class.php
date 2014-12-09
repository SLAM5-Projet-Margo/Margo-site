<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_GestionDeCompte
 *
 * @author btssio
 */
class C_GestionDeCompte {
    /**
     * controleur= gestionDeCompte & action= informationsMonCompte
     * Afficher le formulaire d'authentification au centre
     */
    function informationsMonCompte() {
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee("titreVue","Margo : Mon Compte");
        $this->vue->ecrireDonnee('centre',"../vues/includes/gestionDeCompte/centreMonCompte.inc.php");
        
        $this->vue->ecrireDonnee("titreSection","Mon Compte: Informations");
        // Centre : formulaire de connexion
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));  
        
        // ... depuis la BDD       
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $perso = $daoPers->getOneByLogin(MaSession::get('login'));
        
        $this->vue->ecrireDonnee("infoPerso",$perso);
        
        $this->vue->afficher();
    }
     function modifierInfos() {
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee("titreVue","Margo : Mon Compte");
        $this->vue->ecrireDonnee('centre',"../vues/includes/gestionDeCompte/modifierMonCompte.inc.php");
        $this->vue->ecrireDonnee("titreSection","Mon Compte: Informations");
        // Centre : formulaire de connexion
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));  
        
        // ... depuis la BDD       
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $perso = $daoPers->getOneByLogin(MaSession::get('login'));
        
        $this->vue->ecrireDonnee("infoPerso",$perso);
        
        $this->vue->afficher();
     }
}
