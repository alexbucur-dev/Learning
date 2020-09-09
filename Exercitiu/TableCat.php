<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 13.06.2020
 * Time: 11:21
 */
try {

    // Datele de conectare (adresa_server, baza_de_date, nume si parola)
    $hostdb = 'localhost';
    $namedb = 'my_db';
    $userdb = 'alex';
    $passdb = 'parola';
// Afiseaza mesaj daca s-a reusit conectarea, altfel, retine eventuala eroare

    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->exec("SET CHARACTER SET utf8");      // Setare encoding caractere UTF-8


    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE Categorii2 (
        id SERIAL PRIMARY KEY,
        Denumire VARCHAR(20)
        
      )";


    $dbh->exec($sql);

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}