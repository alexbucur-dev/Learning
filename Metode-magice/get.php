<?php
class Exemplu
{
    private $nume = "Andrei";
    public $varsta;
    public function __get($proprietate){
        if (property_exists($this, $proprietate)){

            echo "Ai incercat sa accesezi valoarea proprietatii $proprietate<br>";


        }else{
            echo "Proprietatea $proprietate nu exista in clasa aceasta.";
        }
    }
}
$obiect = new Exemplu;
echo $obiect->nume;