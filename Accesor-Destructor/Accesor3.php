<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 17.06.2020
 * Time: 14:18
 */

// Se defineste clasa SiteClas
class SiteClas
{
    // Definire proprietati private, fara valoare
    private $site;
    private $categorie;

    // Constructor
    public function __construct($site, $categorie)
    {
        // Atribuie proprietatilor valoarea din parametri
        $this->site = $site;
        $this->categorie = $categorie;
    }

    // Metoda accesor - returneaza valoarea proprietatii 'categorie'
    public function getCategorie()
    {
        return $this->categorie;
    }

    // Metoda accesor pt. setare valoare la "categorie"
    public function setCategorie($val)
    {
        // Daca $val e de tip Sir (string) si are cel putin un caracter
        // Atribuie valoarea lui proprietatii 'categorie'
        // Altfel, returneaza eroare
        if (is_string($val) && strlen($val) > 0) {
            $this->categorie = $val;
        } else throw new Exception('Valoare incorecta pt. categorie');
    }

    // Metoda pt. afisare adresa pagini
    public function pagini($pag)
    {
        // Afiseaza un sir cu adresa URL, www., valoarea celor 2 proprietati si argumentul primit
        echo '<br />www.' . $this->site . '/' . $this->categorie . '/' . $pag;
    }
}
// Creare instanta de obiect la clasa SiteClas
$objSite = new SiteClas('marplo.net', 'php-mysql');

// Afiseaza valoarea returnata de getCategorie() (reprezentand valoarea proprietatii "categorie")
echo $objSite->getCategorie();

// Modifica prin setCategorie() valoarea proprietatii "categorie"
$objSite->setCategorie('testareeeeee');

$objSite->pagini('introducere.html');        // Apelare metoda pagini()