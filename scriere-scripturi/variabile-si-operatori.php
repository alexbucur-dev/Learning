<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 27.05.2020
 * Time: 17:07
 */

// Exemple de variabile:
$var;
$Numar;
$_elemente;

$nume = "Rapidu";
$castigator = $nume;
echo $castigator;

/* Operatori:
$a + $b  (a+b)
$a - $b
$a * $b
$a / $b
$a % $b
$a +=$b  ($a = $a + $b)
$a++ : Incrementare; $a = $a +1
$a-- : Decrementare
*/

$a .= 'Sir de test';
//este echivalenta cu:
$a = $a .'Sir de test';

/*  F U N C T I I
abs(x) - Returneaza valoarea absoluta a lui 'x'
ceil(x) - Returneaza valoarea 'x', rotunjita la intregul imediat superior
floor(x) - Returneaza valoarea 'x', rotunjita la intregul imediat inferior
max(x,y,...) - Returneaza valoarea maxima a unui set de valori
min(x,y,...) - Returneaza valoarea minima a unui set de valori
pow(x,n) - Returneaza numarul 'x', ridicat la puterea 'n'
strftime(f) - Returneaza data curenta, formata conform continutului parametrului 'f'
sqrt(x) - Returneaza radacina patrata a lui 'x'
*/
$latura = sqrt($arie); //calculul lungimilor unui patrat, daca este cunoscuta aria
$punctaj_maxim = max($punctaj1, $punctaj2, $punctaj3);
//rezultatul $punctaj_maxim va fi determinata de valoarea cea mai mare a argumentelor

