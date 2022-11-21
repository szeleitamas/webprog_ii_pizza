<?php

class HirView extends HirModel
{
    public function kiir()
    {
        $ki = $this->hirCheck(); ?>
        <table>
            <th>Azonosító</th>
            <th>Értékelés</th>
			<th>Üzenet</th>
            <th>Beküldő</th>
            <th>Időpont</th>
            <?php
        foreach($ki as $row) {
            echo "<TR>";
            foreach($row as $column) {
                echo "<TD>";
                echo $column." ";
                echo "</TD>";
            }
            echo "</TR>";
        } ?>
        </table>
    <?php }

    public function kiir2()
    {
        $ki2 = $this->hirCheck();
        foreach ($ki2 as $ertek) { ?>
            <fieldset><?php
            echo "Feladó: " .$ertek['bekuldo'];?><br><?php
            echo "Dátum: " .$ertek['ido'];?><br><?php
            echo "Értékelés: " .$ertek['ertekeles'];?><br><br><?php
            echo "Üzenet: <br>" .$ertek['uzenet'];?><br><br>
            </fieldset><?php
        }
    }
}


