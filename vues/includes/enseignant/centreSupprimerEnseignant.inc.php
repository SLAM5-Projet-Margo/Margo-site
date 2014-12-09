<?php 

$UnEnseignant = $this->lireDonnee('unProfesseur');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset id="fieldsetTab">    
        <legend>Supprimer un Enseignant</legend>
        <?php
        echo "Êtes-vous sûr de vouloir supprimer définitivement ".$UnEnseignant->getCivilite()." ".$UnEnseignant->getNom()." ".$UnEnseignant->getPrenom()." ?";
        ?>
        <br />
        <a href="?controleur=enseignant&action=suppressionEnseignant&id=<?php echo $UnEnseignant->getId(); ?>"><img src="../vues/images/delete-32.png" alt=""/></a >
        <a href=".?controleur=enseignant&action=afficherLesEnseignants"><img src="../vues/images/redo-3-32.png" alt=""/></a>
    </fieldset>
