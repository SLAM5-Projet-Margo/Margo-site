<div id="entete">

    <h1 id="Titreappli">MARGO <b style="font-size:10px;" >Version <?php echo VERSION_APPLICATION ?></b></h1>

    <?php
    if (!is_null($this->lireDonnee('loginAuthentification'))) {
        ?>
        <span class="myAccount" >
            <a href=".?controleur=gestionDeCompte&action=informationsMonCompte">
                <img src="../vues/images/info-32.png" style="width:32px; height:32px;" alt="" />Mon Compte
            </a>
        </span>
        <span class="deconnexion" >
            <a href=".?controleur=connexion&action=seDeconnecter">
                <img src="../vues/images/private-32.png" style="width:32px; height:32px;" alt="" />Déconnexion
            </a>
        </span>

        <?php
    }
    ?>

</div>