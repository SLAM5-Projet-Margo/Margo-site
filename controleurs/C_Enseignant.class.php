<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Enseignant
 *
 * @author kbouchet
 */
class C_Enseignant extends C_ControleurGenerique {
    
    function afficherLesEnseignants() {
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/enseignant/centreListeEnseignant.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Enseignants");
        $this->vue->ecrireDonnee("titreSection","Liste des enseignants");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $perso = $daoPers->getEnseignant();
        
        $this->vue->ecrireDonnee("listeEnseignant",$perso);
        $this->vue->afficher();
    }
    
    function formulaireSuppressionEnseignant(){
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/enseignant/centreSupprimerEnseignant.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Enseignant");
        $this->vue->ecrireDonnee("titreSection","Supprimer un enseignant");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $idProfesseur = $_GET['id'];
        $this->vue->afficher();
        
    }
    
    function formulaireAjoutEnseignant(){
        // les fichiers
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/enseignant/centreAjoutEnseignant.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Enseignant");
        $this->vue->ecrireDonnee("titreSection","Ajout d'un enseignant");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $this->vue->afficher();
    }

    //validation de création d'utilisateur 
    function validationCreerEnseignant() {
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('centre',"../vues/includes/enseignant/centreListeEnseignant.inc.php");
        // les données
        $this->vue->ecrireDonnee('titreVue',"MARGO : Enseignants");
        $this->vue->ecrireDonnee("titreSection","Liste des enseignants");
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));
        
        $idRole= 3;     //professeur
        $civilite= $_POST["civilite"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $numTel = $_POST["tel"];
        $mobile = $_POST["telP"];
        $login = $_POST["login"];
        $mdp = sha1($_POST["mdp"]);
            
        
        $objetRole=new M_Role($idRole,null,null);
        $pers = new M_Personne(null, $objetRole, $civilite, $nom, $prenom, $numTel, $mail, $mobile, $login, $mdp);
        
        

        //Connexion et insert bdd
        $daoPers= new M_DaoPersonne();             
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
        $ok = $daoPers->chercherLogin($login);
        if(!$ok){
            $daoPers->insert($pers);

            //Récupérer les donnée si l'utilisateur à été créé
            $personne = $daoPers->getOneByLogin($login);
        }else{
            $this->vue->ecrireDonnee('message', 'Ce login existe deja');
        }
        
        $lesProfesseurs = $daoPers->getEnseignant();
        
        $this->vue->ecrireDonnee("listeEnseignant",$lesProfesseurs);
        
        $this->vue->afficher();
    }
}
