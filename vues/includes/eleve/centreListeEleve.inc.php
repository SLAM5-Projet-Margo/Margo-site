<?php 

$ListeEleve = $this->lireDonnee('listeEleve');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset>
        <legend>Liste des Elèves</legend>
        <table border='1'>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
            </tr>
            <?php
                foreach ($ListeEleve as $unEleve){
                    echo '<tr>'
                            . '<td>'.$unEleve->getNom().'</td>'
                            . '<td>'.$unEleve->getPrenom().'</td>'
                            . '<td>'.$unEleve->getMail().'</td>'
                        .'</tr>';
                }
            ?>
        </table>
    </fieldset>
