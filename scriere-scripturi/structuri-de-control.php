<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 30.05.2020
 * Time: 15:22
 */

/*if (conditie){
    //Bloc de instructiuni  - 1
} else {
    // Bloc de instructiuni - 2
} else if (conditie2)
    // Bloc de instructiuni - 3

*/


$numar = 25;
if ($numar > 20) {
    echo 'Numarul introdus este mai mare decat 20';
    //sau
    echo $numar."este mai mare decat 20";
}
else {
    echo $numar . "nu este mai mare decat 20";
}else if($numar == 25) {
    echo $numar."este egal cu 25";

}

