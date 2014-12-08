<!-- VARIABLES NECESSAIRES -->
<!-- Constantes globales  de includes/version.inc.php -->
<!-- loginAuthentification : login si authentification ok -->
<div id="gauche">
    <ul class="menugauche">
        <p><h2>Menu</h2></p>
        <hr/>
        <p class="note">
        <?php
        if (!is_null($this->lireDonnee('loginAuthentification'))) {
            //menu de gauche présent pour tous les utilisateurs
            echo "<li class='bouton_menu'><a href='./index.php' >Accueil</a></li>";
            echo "<li class='bouton_menu'><a href=\".?controleur=utilisateur&action=coordonnees\">Enseignants</a></li>";
            echo "<li class='bouton_menu'><a href=\".?controleur=utilisateur&action=afficherEntreprise\">Filières</a></li>";
            echo "<li class='bouton_menu'><a href=\".?controleur=utilisateur&action=afficherEntreprise\">Classes</a></li>";
            echo "<li class='bouton_menu'><a href=\".?controleur=utilisateur&action=afficherEntreprise\">Elèves</a></li>";
            echo "<h2>Utilisateur : <i>" . $this->lireDonnee('loginAuthentification') . "</i></h2>";
        } else {
            echo "<li class='bouton_menu'><a href=\".?controleur=connexion&action=seConnecter\">Se connecter</a></li>";
        }
        echo "</ul>";
        ?>
        </p>
    </ul>
</div>