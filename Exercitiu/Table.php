<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 12.06.2020
 * Time: 14:24
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
    $sql = "CREATE TABLE Exercitiu2 (
        Nume VARCHAR(30) NOT NULL,
        Prenume VARCHAR(30) NOT NULL,
        Email VARCHAR(50) UNIQUE ,
        Varsta INT,
        Descriere TEXT,
        Categorie INT 
      )";


    $dbh->exec($sql);

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}