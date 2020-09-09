<?php
// Definire clasa AClas
class AClas {
    // Metoda magica __call() (pt. apelari metode nedefinite)
    public function __call($name, $args) {
        // Afiseaza un mesaj cu numele metodei apelate si argumentele transmise
        echo 'Metoda <b>'. $name. '</b> nu exista. Argumente: <i>'. implode(', ', $args). '</i>';
    }
}

// Creare instanta de obiect la clasa AClas
$obj = new AClas();

// Apelare metoda inexistenta
$obj->site('cursuri', 'tutoriale');           // Va determina executia metodei __call()
