<?php
// Definire Interface ITest
interface ITest {
    // Lista cu metode
    public function Links();
    public function Tutoriale($str, $nota);
}
// Creare clasa care aplica Interfata ITest
class WebDevelopment implements ITest {
    // Definire proprietate 'link' (cu atribut "protected")
    protected $link = 'marplo.net';

    /* Definire metodele obligatorii (Links si Tutoriale), din interface */

    // Returneaza valoarea proprietatii 'site'
    public function Links() {
        return $this->link;
    }

    // Returneaza valoarea unei variabile din ea ($re), ce preia argumentele transmise
    public function Tutoriale($gen, $nota) {
        $re = $gen. '-'. $nota;
        return $re;
    }

    // Se pot crea si alte metode, suplimentare
    // Aceasta modifica valoare proprietatii "link"
    public function setLink($link) {
        $this->link = $link;
    }
}
