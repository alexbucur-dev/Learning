<?php

// Clasa elStatic
class elStatic {
    // Definire proprietati statice
    static private $site = 'marplo.net';        // Privata
    static public $id = 78;                       // Publica

    // Constructor
    public function __construct($site) {
        // Daca parametru $site e de tip String si cel putin 4 caractere
        // Atribuie valoarea la proprietatea "site" si apeleaza metoda getProp()
        // Altfel, seteaza un mesaj de eroare
        if(is_string($site) && strlen($site)>3) {
            elStatic::$site = $site;
            self::getProp();             // Apelare prin cuvantul special  self
        }
        else throw new Exception('Valoare incorecta pt. site');
    }

    // Metoda statica
    static public function getProp() {
        // Afiseaza valoarea proprietatilor statice (folosind numele clasei, dar si cuvantul  self )
        echo '<br /> ID = '. elStatic::$id. ' - site: '. self::$site;
    }
}
?>
    - Vedeti explicatiile din cod si modul de lucru, cum sunt accesate proprietatile si metoda statica.
    - Deoarece elementele statice apartin direct clasei, pentru utilizarea lor nu e nevoie de crearea unei instante la aceasta clasa. Dar se pot folosi si instante, acestea determina auto-apelarea metodei constructor, dupa cum puteti vedea in scriptul urmator, care foloseste elemente din clasa "elStatic" si o instanta la ea.
<?php
echo elStatic::$id;        // Afiseaza valoarea proprietatii statice "id"
elStatic::getProp();       // Apeleaza metoda statica getProp()

elStatic::$id = 89;       // Modifica valoarea proprietatii statice "id"

// Creare Instanta la clasa elStatic
$obj = new elStatic('www.php.net');
