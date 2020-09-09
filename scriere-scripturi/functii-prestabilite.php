<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 30.05.2020
 * Time: 14:54
 */

// Functii prestabilite: strlen, str_word_count, strrev, strpos, str_replace

echo strlen(Exemplu);
$variabila = "exemplu doi trei patru";
echo strlen($variabila); // numara literele/spatiile

echo str_word_count($variabila); //numara cuvintele

echo strrev($variabila); //afiseaza cuvantul scris de la coada la cap
$caut = "doi";
echo strpos($variabila, $caut);

$de_inlocuit = "trei";
$inlocuieste = "cafea";


echo str_replace($de_inlocuit, $inlocuieste, $variabila);



