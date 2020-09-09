<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 03.06.2020
 * Time: 15:04
 */
/*
 * $GLOBALS
 * $_SERVER
 * $_POST
 * $FILES
 * $_COOKIE
 * $_SESSION
 * $_REQUEST
 * $_ENV
 */
$a = 10;
function afiseaza(){
    $b = 50;
    echo $b;
    $GLOBALS['a']++;
}
afiseaza ();
echo $a;









?>