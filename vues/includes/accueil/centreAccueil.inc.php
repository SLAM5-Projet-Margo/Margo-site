<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<?php
if (!is_null($this->lireDonnee('loginAuthentification'))) {
    echo "<div id='titreSection'><h1>Bienvenu sur votre Espace Enseignant</h1></div>";
    echo "<p id='introAccueil'>Cet espace vous permet de gérer vos enseignements, vos filières, vos classes ainsi que vos élèves.<br />"
    . "Cliquez sur un élément du menu latéral pour le gérer.<br />"
    . "Si vous souhaitez gérer votre compte, cliquez sur le lien \"Mon Compte\" en haut à droite de la page.<br />"
    . "Enfin, afin d'assurer la sécurité de vos données, cliquez sur le lien \"Déconnexion\" en haut a droite.</p>";
}else{
    echo "<div id='titreSection'><h1>Veuillez vous connecter</h1></div>"; 
}
?>