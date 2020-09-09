<?php


// Clasa Site
class Site {
    // Definire proprietati, private si public
    private $site;
    public $categorie = 'php-mysql';

    // Constructor
    public function __construct($site) {
        // Daca parametru $site e un Sir cu cel putin 5 caractere, atribuie valoarea la proprietatea "site"
        // Altfel, seteaza un mesaj de eroare
        if(is_string($site) && strlen($site)>4) $this->site = $site;
        else throw new Exception('Valoare incorecta pt. site');
    }

    // Metoda getPag()
    public function getPag($pag) {
        // Defineste si returneaza adresa URL a paginii
        $url = $this->site. '/'. $this->categorie. '/'. $pag;
        return $url;
    }
}
// Creare clasa copil LinkSite, extinsa din Site
class LinkSite extends Site {
    // Metoda getLink()
    public function getLink($pag) {
        // Afiseaza un link format din getPag() si "categorie" din clasa parinte
        echo '<a href="http://'. $this->getPag($pag). '" title="'. $this->categorie. '">Link</a><br />';
    }
}
// Creare instanta la clasa copil LinkSite
$objLink = new LinkSite('marplo.net');

// Apeleaza metoda getLink() (definita in clasa copil);
$objLink->getLink('oop-clase-extinse-mostenire.html');

// Modifica valoarea proprietatii "categorie" (aflata in clasa parinte)
$objLink->categorie = 'ajax';

// Afiseaza rezultatul dat de metoda getPag() (creata in clasa parinte)
echo $objLink->getPag('introducere.html');