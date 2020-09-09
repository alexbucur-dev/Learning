<?php
class Exemplu
{
    private $nume = "Andrei";
    public $varsta;
    public function __set($proprietate, $valoare){
        if (property_exists($this, $proprietate)){
            $this->nume =$valoare;
            echo "Valoarea proprietatii $proprietate a fost schimbata in $valoare<br>";
            echo $this->nume;

        }else{
            echo "Proprietatea $proprietate nu exista in clasa aceasta.";
        }
    }
}
$obiect = new Exemplu;
$obiect->nume = "Mihai";