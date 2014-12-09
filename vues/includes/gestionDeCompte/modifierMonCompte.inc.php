<?php

    echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
<form method="post" action="#" id="editInfoPerso">
    <div id="Formulaire_Info_Connexion">
        <fieldset>
            <legend>Informations de connexion</legend>
            <p>
                <?php
                echo '<label for="txtLogin"><span id="underline">'.$this->lireDonnee('infoPerso')->getLogin().'</span></label>';?>
                <div class='valeurModifier'><input type="text" size="15" maxlength="128" id="id_login" name="txtLogin" value='Login' onblur="if(this.value=='')this.value='Login'" onclick="if(this.value=='Login')this.value=''"/></div><br />
                <?php
                echo '<label for="txtMail"><span id="underline">'.$this->lireDonnee('infoPerso')->getMail().'</span></label>';
                ?>
                <div class='valeurModifier'><input type="text" size="25" maxlength="30" id="id_mail" name="txtMail" value='Email' onblur="if(this.value=='')this.value='Email'" onclick="if(this.value=='Email')this.value=''"/></div><br />
            </p>

        </fieldset>
    </div>
    <div id="Formulaire_Info_Perso">
        <fieldset>
            <legend>Informations personnelles</legend>
            <p>
                <?php
                echo '<label for="txtCivil"><span id="underline">'.$this->lireDonnee('infoPerso')->getCivilite().'</span></label>';
                ?><div class='valeurModifier'><input type="text" size="10" maxlength="30" id="id_Civil" name="txtCivil" value='Civilité' onblur="if(this.value=='')this.value='Civilité'" onclick="if(this.value=='Civilité')this.value=''"/></div><br /><?php
                echo '<label for="txtNom"><span id="underline">'.$this->lireDonnee('infoPerso')->getNom().'</span></label>';
                ?><div class='valeurModifier'><input type="text" size="10" maxlength="30" id="id_Nom" name="txtNom" value='Nom' onblur="if(this.value=='')this.value='Nom'" onclick="if(this.value=='Nom')this.value=''"/></div><br /><?php
                echo '<label for="txtPrenom"><span id="underline">'.$this->lireDonnee('infoPerso')->getPrenom().'</span></label>';
                ?><div class='valeurModifier'><input type="text" size="15" maxlength="30" id="id_Prenom" name="txtPrenoml" value='Prénom' onblur="if(this.value=='')this.value='Prénom'" onclick="if(this.value=='Prénom')this.value=''"/></div><br /><?php
                echo '<label for="txtTel"><span id="underline">'.$this->lireDonnee('infoPerso')->getNumTel().'</span></label>';
                ?><div class='valeurModifier'><input type="text" size="10" maxlength="10" id="id_Tel" name="txtTel" value='Num tel' onblur="if(this.value=='')this.value='Num tel'" onclick="if(this.value=='Num tel')this.value=''"/></div><br /><?php
                echo '<label for="txtMobile"><span id="underline">'.$this->lireDonnee('infoPerso')->getMobile().'</span></label>';
                ?><div class='valeurModifier'><input type="text" size="10" maxlength="10" id="id_Mobile" name="txtMobile" value='Num mobile' onblur="if(this.value=='')this.value='Num mobile'" onclick="if(this.value=='Num mobile')this.value=''" /></div>
            </p>

        </fieldset>
    </div>
    <input type="submit" value="Valider" />
</form>
