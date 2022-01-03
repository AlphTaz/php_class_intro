<?php

class Crepes {
    public $oeufs;
    public $lait ;
    public $beurre ;
    public $farine;
    private $rhum;
    private $topping = []; 


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
        echo $this->lait."cl de lait.\n";
        echo $this->beurre."grammes de beurre.\n";
        echo $this->farine."grammes de farine.\n";
        echo $this->rhum."cl de rhum.\n";
        echo $this->topping."topping.\n";

}

public function getTopping () {
    return $this->topping;
}

public function setTopping ($y) {
    $this->topping =$y;
}

public function addTopping ($z) {
    $z= strtolower($z);
array_push($this->topping, $z);

}

public function removeTopping ($a) {
    $value = $a;
    if (($i = array_search($value, $this->topping)) !== false) {
        unset($this->topping[$i]);
    }
    echo "L'élement suivant a été correctement supprimé :" . $value;
    var_dump($this->topping);
}


}

?> 
