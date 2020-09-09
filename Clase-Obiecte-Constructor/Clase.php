<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 17.06.2020
 * Time: 13:34
 */

/*
class Exemplu {

    public $variabila = "Ma aflu in clasa Exemplu.";


}
$tutorial = new Exemplu;
echo $tutorial->variabila; */

class SiteClas {
    public $site = 'marplo.net/';          // Proprietatea publica
    private $categorie = 'php-mysq/';          // Proprietate privata

/* Creare metoda, preia un argument
    public function pagini($pag) {
        // Afiseaza adresa URL formata din valoarea celor 2 proprietati si argumentul primit
        echo '<br />'. $this->site. $this->categorie. $pag;
    } */

/*include('class.SiteClas.php');        - Include clasa
$objSite = new SiteClas();         // Creare instanta de obiect la clasa SiteClas

echo $objSite->site;        // Afisaza valoarea proprietatii "site"

// Apeleaza metoda pagini() [cu un argument, dupa cum a fost definita]
$objSite->pagini('oop-clase-obiecte.html');

// Modifica valoarea proprietatii "site" si apeleaza iar metoda pagini()
$objSite->site = 'www.alt-site.net/';
$objSite->pagini('oop-clase-obiecte.html');
*/

// Definire metoda constructor
public function __construct($nume) {
    // Afiseaza un mesaj de bun venit, incluzand proprietatea "site"
    echo 'Bine ai venit '. $nume. ' pe '. $this->site. '<br />';
    echo $this->Mesaj();       // adauga si ce returneaza metoda Mesaj()
}

// Metoda protected
protected function Mesaj() {
    // Returneaza un mesaj cu proprietatea 'categorie'
    return 'Categoria de cursuri '. $this->categorie;
}
// Creare metoda, preia un argument
public function pagini($pag) {
    // Afiseaza adresa URL formata din valoarea celor 2 proprietati si argumentul primit
    echo '<br />'. $this->site. $this->categorie. $pag;
}
}
$objSite = new SiteClas('Marius');
