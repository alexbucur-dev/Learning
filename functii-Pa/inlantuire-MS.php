<?php
class clsData {
    // proprietate privata, nu poate fi accesata direct in afara clasei
    private static $data;

    // metoda statica, seteaza valoarea pt. $data
    public static function setData(){
        self::$data = 'https://marplo.net/php-mysql/';

        return new self;      // returneaza instanta clasei
    }

    // metoda ce returneaza valoarea din $data
    public function getData(){
        return self::$data;
    }
}

// acceseaza metoda getData() dupa /legat de setData()
echo clsData::setData()->getData();       // https://marplo.net/php-mysqljj/
