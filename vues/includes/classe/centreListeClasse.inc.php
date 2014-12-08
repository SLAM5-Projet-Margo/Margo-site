<?php 

$ListeClasse = $this->lireDonnee('lesClasses');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset>
        <legend>Liste des Classes</legend>
        <table border='1'>
            <tr>
                <th>Nom</th>
                <th>Désignation</th>
            </tr>
            <?php
                foreach ($ListeClasse as $uneClasse){
                    echo '<tr>'
                            . '<td>'.$uneClasse->getNumclasse().'</td>'
                            . '<td>'.$uneClasse->getNomclasse().'</td>'
                        .'</tr>';
                }
            ?>
        </table>
    </fieldset>
