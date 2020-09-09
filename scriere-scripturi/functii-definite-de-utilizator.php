<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 02.06.2020
 * Time: 18:06
 */

/*
function nume(parametrii){
    // Bloc de instructiuni
}
*/

function plus10($numar){
    $numarnou = $numar +10;
    echo "Numar: ".numarnou;
}

$exemplu = 50;
plus10($exemplu);


function calculeaza($numar1, $numar2){
    $total = $numar1 + $numar2;
   return $total;
}
$ex1 = 10;
$ex2 = 20;
$suma = calculeaza($ex1. $ex2);
echo $suma;

function afiseaza($var){
    echo $var;
}
$exemplu = "Exemplu";
afiseaza($exemplu);

$var1 = function() {
    echo "dsadasdsadsa";
};
$var1();   // $var1 functioneaza ca o functie

$a = 10;
function example() {
    $b = 20;
    echo $b;
}
example();


