<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Classe
 *
 * @author kbouchet
 */
class C_Classe {
    
    function afficherLesClasses() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/classe/centreListeClasse.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Classe");
        $this->vue->ecrireDonnee("titreSection","Liste des classes");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->setPdo($pdo);
        $this->vue->ecrireDonnee('lesClasses', $daoClasse->getAll());
        
        $this->vue->afficher();
    }
}
