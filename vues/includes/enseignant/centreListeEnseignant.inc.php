<?php 

$ListeEnseignant = $this->lireDonnee('listeEnseignant');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset>
        <legend>Liste des Enseignants</legend>
        <table id ="tab" border='1'>
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
