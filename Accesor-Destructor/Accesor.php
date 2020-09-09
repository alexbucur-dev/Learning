<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 17.06.2020
 * Time: 14:09
 */
// Se defineste clasa SiteClas
class SiteClas {
    public $site;          // Proprietate declarata fara valoare
    private $categorie;          // Proprietate privata, fara valoare

    // Constructor
    public function __construct($site, $categorie) {
        // Atribuie proprietatilor valoarea din parametri
        $this->site = $site;
        $this->categorie = $categorie;
    }

    // Metoda pt. afisare adresa pagini
    public function pagini($pag) {
        // Afiseaza un sir cu adresa URL, www., valoarea celor 2 proprietati si argumentul primit
        echo '<br />www.'. $this->site.'/'. $this->categorie.'/'. $pag;
    }
}