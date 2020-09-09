<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 30.05.2020
 * Time: 16:59
 */

    // WHILE
    // DO-WHILE
    // FOR
    // FOREACH

   /* while (conditie) {
        //Bloc de instructiuni

    }
   */

   $numar = 10;

   while($numar > 0) {
       echo $numar.'<br>';
       $numar--;
   }
   echo 'blabla';

   /* DO-WHILE
   do {
   //Bloc de instructiuni
   } while(conditie);
   */

   $i = 5
   do {
       echo $i.'<br>';
       $i--;
   } while ($i>0);

   /* FOR
   for (parametrii) {

   }
   */

   for ($w=0; $w<10; $w++) {
       echo $i.'<br>';

   }
   /*
   foreach ($array as $element) {
       //Bloc de instructiuni
   }
   */

   $array = ['rosii', 'ardei', 'morcovi'];
   for ($i=0; $i<count($array); $i++) {
       echo $array[$i].'<br>';
   }
   foreach ($array as $legume) {
       echo $legume.'<br>';
   }

   swich (variabila) {
       case valoare1:
           //bloc de instructiuni 1
break;
           case valoare2:
           //bloc de instructiuni 2
break;
           case valoare1:
           //bloc de instructiuni 2
break;
           default:
               //bloc de instructiuni default
   }

   $numar = 10;
   swich($numar){
       case 5:
           echo '5';
           break;
       case 10:
           echo '10';
           break;
       case 15:
           echo'15';
           break;
       default:
           echo 'numarul nu este gasit';
   }