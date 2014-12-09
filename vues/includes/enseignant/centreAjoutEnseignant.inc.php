<?php 

echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset id="fieldsetTab">    
        <legend>Ajouter un Enseignant</legend>
            <script language="JavaScript" type="text/javascript" src="../vues/javascript/fonctionsJavascript.inc.js"></script>
        <script language="JavaScript" type="text/javascript" src="../bibliotheques/jquery.js"></script>
        <script language="JavaScript" type="text/javascript" src=".../vues/javascript/ajax.inc.js"></script>


        <!-- VARIABLES NECESSAIRES -->

        <!-- $this->message : à afficher sous le formulaire -->
        <form method="post" action=".?controleur=enseignant&action=validationCreerEnseignant" name="CreateUser">
            <!-- Données valables pour tous les rôles -->
            <div id="Formulaire_Information_generales">
                <fieldset>
                    <legend>Ses informations g&eacute;n&eacute;rales</legend>
                    <input type="hidden" readonly="readonly" name="id" id="id"></input>
                    <label for="civilite">Civilit&eacute; :</label>

                    <select type="select" name="civilite" id="civilite">
                        <option>Madame</option>
                        <option>Monsieur</option>
                    </select>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom"></input><br/>
                    <label for="prenom">Pr&eacute;nom :</label>
                    <input type="prenom" name="prenom" id="prenom"></input><br/>
                    <label for="mail">E-Mail :</label>
                    <input type="text" name="mail" id="mail"></input><br/>
                    <label for="tel">Tel :</label>
                    <input type="text" name="tel" id="tel"></input><br/>
                    <label for="tel">Tel portable:</label>
                    <input type="text" name="telP" id="telP"></input><br/>
                </fieldset>
            </div>

            <div id="Formulaire_Identifiants" style="display:none">
                <!-- Donnée de conection des utilisateur -->
                <fieldset>
                    <legend>Ses identifiants de connexion</legend>
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login"></input><br/>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" name="mdp" id="mdp"></input><br/>
                    <label for="mdp2">Retaper le mot de passe :</label>  <!-- vérification de mots de passe -->
                    <input type="password" name="mdp2" id="mdp2"></input><br/>

                </fieldset>
            </div>
            <div id="Formulaire_Bouton">
                <fieldset>
                    <input type="button" id="button-precedent" value="Précédent" onclick="return etapePrecedent()" disabled>
                    <input type="button" id="button-suivant" value="Suivant" onclick="return valider()">
                    <input type="submit" id="button-creer" value="Creer" onclick="return valideI()" disabled></input>
                    <input style="float:right" type="button" value="Annuler" onclick="history.back(-1)" />
                <!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
                </fieldset>
            </div>
        </form>
    </fieldset>
