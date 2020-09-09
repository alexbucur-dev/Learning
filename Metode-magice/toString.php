<?php
// Definire clasa AClas
class AClas {
    private $mesaj;       // Proprietate

    // Metoda Constructor
    public function __construct($mesaj) {
        // Atribuie valoarea din parametru la proprietatea "mesaj"
        $this->mesaj = $mesaj;
    }

    // Metoda magica __toString()
    public function __toString() {
        return $this->mesaj;        // Returneaza valoarea proprietatii "mesaj"
    }
}

// Creare instanta de obiect la clasa AClas
$obj = new AClas('Fii bine primit');

// Apelare instanta, ca pe o variabila de tip String
echo $obj;           // Va determina executia metodei __toString()