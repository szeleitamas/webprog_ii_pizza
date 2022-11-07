<?php

class HirView extends HirModel
{
    public function kiir()
    {
        $this->hirCheck();
        echo "<TABLE>";
        foreach($sth as $row) {
            echo "<TR>";
            foreach($row as $column) {
                echo "<TD>";
                echo $column." ";
                echo "</TD>";
            }
            echo "</TR>";
        }
        echo "</TABLE>";
    }
}


