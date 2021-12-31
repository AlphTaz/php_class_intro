<?php

class Crêpes {
    public $oeufs ="2 oeufs";
    public $lait ="40 cl de lait";
    public $beurre ="20g de beurre";
    public $farine ="50g de farine";
    public $rhum ="10 cl de rhum";

}

// Afficher propriété de classe  => afficher-recette

function afficher_recette () {
    echo 'Pour ma recette de crêpes, il me faut:' . ($oeufs) . ($lait) . ($beurre) . ($farine) . ($rhum)
}

?> 