<?php
// Definire clasa abstracta
abstract class Fructe {
    protected $color;        // Proprietate

    // Definire metoda abstracta
    abstract function Stoc($luna);

    // Metoda accesor pt. "color"
    public function setColor($c) { $this->color = $c; }
}
// Definire clasa copil, extinsa din cea abstracta
class Mere extends Fructe {
    private $kg;        // Proprietate

    // Metoda obligatorie (seteaza valoarea proprietatii "Kg")
    public function Stoc($kg) {
        $this->kg = $kg;
    }

    // Alta Metoda - optionala (returneaza valoarea proprietatii "kg")
    public function getKg() {
        return $this->kg. ' kg';
    }
}
// Creare instanta de obiect la clasa Mere si apelare metode
$obj = new Mere();
$obj->Stoc(78);
echo $obj->getKg();