<?php
// Definire clasa AClas
class AClas {
    public function aMet() {
        return 'Metoda clasa AClas';
    }
}

// Definire clasa BClas
class BClas {
    // Metoda definita sa accepte la parametru $obj_par doar elemente ce apartin unui obiect de clasa AClas
    public function bObj(AClas $obj_par) {
        return $obj_par->aMet();        // Returneaza apelul metodei aMet() din AClas
    }

    // Metoda definita sa accepte la parametru $arr_par doar date de tip Array
    public function bArr(array $arr_par) {
        print_r($arr_par);       // Afiseaza structura elementelor din $arr_par
    }
}

// Creare instanta de obiect la clasa AClas
$objAC = new AClas();

// Creare instanta de obiect la clasa BClas
$objBC = new BClas();

// Apeleaza metoda bObj() din BClas cu instanta la AClas si cealalta cu un Array
echo $objBC->bObj($objAC). '<br />';
echo $objBC->bArr( array('cursuri', 'tutoriale') );