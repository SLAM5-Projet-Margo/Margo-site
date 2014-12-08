<?php

    echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
<form method="post" action="#" id="editInfoPerso">
    <div id="Formulaire_Info_Connexion">
        <fieldset>
            <legend>Informations de connexion</legend>
            <?php
            echo $this->lireDonnee('infoPerso')->getLogin().'<br />';
            echo $this->lireDonnee('infoPerso')->getMdp().'<br />';
            echo $this->lireDonnee('infoPerso')->getMail().'<br />';
            ?>

        </fieldset>
    </div>
    <div id="Formulaire_Info_Perso">
        <fieldset>
            <legend>Informations personnelles</legend>
            <?php
            echo $this->lireDonnee('infoPerso')->getCivilite().'<br />';
            echo $this->lireDonnee('infoPerso')->getNom().'<br />';
            echo $this->lireDonnee('infoPerso')->getPrenom().'<br />';
            echo $this->lireDonnee('infoPerso')->getNumTel().'<br />';
            echo $this->lireDonnee('infoPerso')->getMobile();
            ?>

        </fieldset>
    </div>
</form>
