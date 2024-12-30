<?php

require_once "orangBiasa.php";

class orangInggris extends orangBiasa{

    // override
    public function ucapSalam()
        {
            echo "Hallo my name is " . $this->nama . "<br>";
        }

}