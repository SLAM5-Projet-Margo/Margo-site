<?php 

$ListeFilieres = $this->lireDonnee('lesFiliere');
echo "<div id='titreSection'><h1>".$this->lireDonnee('titreSection')."</h1></div>";
?>
    <fieldset>
        <legend>Liste des Filières</legend>
        <table id="tab" border='1'>
            <tr>
                <th>Numéro</th>
                <th>Libellé</th>
            </tr>
            <?php
                foreach ($ListeFilieres as $unFiliere){
                    echo '<tr>'
                            . '<td>'.$unFiliere->getId().'</td>'
                            . '<td>'.$unFiliere->getLibelle().'</td>'
                        .'</tr>';
                }
            ?>
        </table>
    </fieldset>
