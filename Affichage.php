<?php

require'Crêpes.php';
$x = new Crepes (3, "20 cl","20 cl", "50 g", "10 cl", [] );

// var_dump ($x);
//  echo $x->getTopping();
// $x -> setTopping ("banane") ;
// echo $x->getTopping();
$x -> addTopping ("banane") ;
$x -> addTopping ("Chocolat") ;
$x -> removeTopping ("chocolat") ;

var_dump($x);

?>