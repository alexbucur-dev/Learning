<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 27.05.2020
 * Time: 16:21
 */
/* Aceste doua mari categorii de date:numere si siruri,
formeaza opt tipuri principale de variabile:
-Boolean
-Integer
-Float
-String
-Array
-Object
-Resource
-Null */

// Intger=numere intregi
echo (int)8.7;
//va returna 8 (obtinem partea intreaga)
echo round(8.7);
//va returna 9 (rotunjeste la intregul cel mai apropiat)

//Float=numere cu virgula

$var1 = 'Acesta este un sir de test';
echo '<br/>Variaba var1=$var1';
echo "<br/>Variabila var1=$var1";

// Ca "$var1" sa preia valoarea setata trebuie sa folosim "..."
// Pentru a nu prealua valoarea setata, folosim \$var
/*Pentru a adauga ghilimele duble in interiorul altora folosim \ inaintea
acestora
*/
echo "numele programului este \"PHP\"";

$nume = 'Bucur';
$prenume = 'Alex';
echo 'Numele de familie este '.$nume.' iar prenumele este '.$prenume.'';

$var5 = 'Acesta este un sir de test';
echo $var5{0};  //Afiseaza A (primul caracter din sir)
echo $var5{3}; //Afiseara s (al patrulea caracter din sir)

$var6 = <<<EOT 
Exemplu de sir care foloseste delimitatorul herodoc.
EOT;
echo $var6;

//putem afla tipul unei variabile folosind gettype() :
$var2 = 100;
echo '<br/>'.gettype($var2);

//in browser va aparea "integer"




