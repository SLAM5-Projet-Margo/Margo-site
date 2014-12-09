<?php 

$ListeEnseignant = $this->lireDonnee('listeEnseignant');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset id="fieldsetTab">    
        <?php
        
        if (MaSession::get('role') == 1) {
            //administrateur
            ?>
            <a href="?controleur=enseignant&action=formulaireAjoutEnseignant"><img src="../vues/images/add-list-32.png" style="width:32px; height:32px;" alt="" /></a>
            <?php
        }
        ?>
        <legend>Liste des Enseignants</legend>
        <table id ="tab" border='1'>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <?php

                if (MaSession::get('role') == 1) {
                    //administrateur
                    echo "<th>Supprimer</th>";
                }
                ?>
            </tr>
            <?php
                foreach ($ListeEnseignant as $unEnseignant){
                    echo '<tr>'
                            . '<td>'.$unEnseignant->getNom().'</td>'
                            . '<td>'.$unEnseignant->getPrenom().'</td>'
                            . '<td>'.$unEnseignant->getMail().'</td>';
                            if (MaSession::get('role') == 1) {
                                //administrateur
                                echo '<td><a href="?controleur=enseignant&action=formulaireSuppressionEnseignant&id='.$unEnseignant->getId().'"><img src="../vues/images/error-6-32.png" style="width:32px; height:32px;" alt="" /></a></td>';
                        
                            }
                    echo '</tr>';
                }
            ?>
        </table>
    </fieldset>
