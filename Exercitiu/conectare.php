<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 08.06.2020
 * Time: 15:41
 */
// Datele de conectare (adresa_server, baza_de_date, nume si parola)
$hostdb = 'localhost';
$namedb = 'my_db';
$userdb = 'alex';
$passdb = 'parola';
// Afiseaza mesaj daca s-a reusit conectarea, altfel, retine eventuala eroare

    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->exec("SET CHARACTER SET utf8");      // Setare encoding caractere UTF-8



