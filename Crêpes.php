<?php

class Crepes {
    public $oeufs;
    public $lait ;
    public $beurre ;
    public $farine;
    public $rhum;
    public $topping; 


public function __construct (
     $oeufs,
     $lait,
     $beurre,
     $farine, 
     $rhum,
     $topping,     

     ) {

    $this->oeufs = $oeufs;
    $this->lait = $lait;
    $this->beurre = $beurre;
    $this->farine = $farine;
    $this->rhum = $rhum;
    $this->topping = $topping;

}

// Afficher propriété de classe  => afficher-recette

    public function afficher_recette () {
        echo "Pour ma recette de crêpes, il me faut: \n"; 
        echo $this->oeufs."oeufs.\n";
        echo $this->lait."lait.\n";
        echo $this->beurre."beurre.\n";
        echo $this->farine."farine.\n";
        echo $this->rhum."rhum.\n";
        echo $this->topping."topping.\n";


}
}

?> 