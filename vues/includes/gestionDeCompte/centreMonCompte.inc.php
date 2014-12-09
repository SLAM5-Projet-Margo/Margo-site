<?php

    echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
<form method="post" action="?controleur=gestionDeCompte&action=modifierInfos" id="editInfoPerso">
    <div id="Formulaire_Info_Connexion">
        <fieldset>
            <legend>Informations de connexion</legend>
            <p>
                <?php
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getLogin().'</span><br />';
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getMail().'</span><br />';
                ?>
            </p>

        </fieldset>
    </div>
    <div id="Formulaire_Info_Perso">
        <fieldset>
            <legend>Informations personnelles</legend>
            <p>
                <?php
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getCivilite().'</span><br />';
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getNom().'</span><br />';
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getPrenom().'</span><br />';
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getNumTel().'</span><br />';
                echo '<span id="underline">'.$this->lireDonnee('infoPerso')->getMobile().'</span>';
                ?>
            </p>

        </fieldset>
    </div>
    <input type="submit" value="Modifier" />
</form>
