<?php 

$ListeEnseignant = $this->lireDonnee('listeEnseignant');
?>
    <fieldset>
        <legend>Liste des Enseignants</legend>
        <table border='1'>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
            </tr>
            <?php
                foreach ($ListeEnseignant as $unEnseignant){
                    echo '<tr>'
                            . '<td>'.$unEnseignant->getNom().'</td>'
                            . '<td>'.$unEnseignant->getPrenom().'</td>'
                            . '<td>'.$unEnseignant->getMail().'</td>'
                        .'</tr>';
                }
            ?>
        </table>
    </fieldset>
