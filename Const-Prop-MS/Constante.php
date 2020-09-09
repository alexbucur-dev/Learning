<?php

// Clasa Test
class Test {
    public $raza;          // Proprietate
    const PI = 3.14;       // Constanta

    // Constructor
    public function __construct($raza) {
        // Daca $raza e un numar, atribuie valoarea la proprietatea "raza"
        // Altfel, seteaza un mesaj de eroare
        if(is_numeric($raza)) $this->raza = $raza;
        else throw new Exception('Valoare incorecta pt. raza');
    }

    // Returneaza aria cercului
    public function getArea() {
        return Test::PI * pow($this->raza, 2);
    }
}
echo Test::PI;        // Afiseaza valoarea constantei PI din clasa Test

// Creare Instanta la clasa Test
$objTest = new Test(100);

// Afiseaza aria cercului cu raza 78, returnata de metoda getArea()
echo '<br /> Aria cercului  este: '. $objTest->getArea();
