<?php
// Definire clasa AClas
class AClas {
    // Proprietate care va retine valori atribuite unor proprietati nedeclarate
    public $prop = array();

    // Metoda magica __get() (pt. accesari proprietati nedefinite)
    public function __get($name) {
        // Daca exista element cu cheia '$name' in $prop, afiseaza valoarea lui
        // Altfel, mesaj ca proprietatea nu exista
        if(array_key_exists($name, $this->prop)) echo $this->prop[$name]. '<br />';
        else echo 'Proprietatea <b>'. $name. '</b> nu exista.<br />';
    }

    // Metoda magica __set() (pt. cand se atribuie valori unor proprietati nedefinite)
    public function __set($name, $value) {
        // Adauga in $prop element cu cheia $name si valoarea value
        $this->prop[$name] = $value;
        echo 'Proprietatea <b>'. $name. '</b> nu exista. S-a atribuit valoarea <i>'. $value. "</i> la proprietatea: <b>prop['$name']</b><br />";
    }
}

// Creare instanta de obiect la clasa AClas
$obj = new AClas();

// Apelare proprietate neexistenta
$obj->noprop;           // Va determina executia metodei __get()

// Atribuire valoare la proprietate inexistenta
$obj->noprop = 'Valoare pt. noprop - PHP OOP';           // Va determina executia metodei __set()

// Apelare din nou a aceleiasi proprietati neexistente
$obj->noprop;           // Va determina executia metodei __get()

// Se verifica direct si elementul pe care-l creaza __set()
echo 'Verificare: '. $obj->prop['noprop'];
