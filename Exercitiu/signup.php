<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 12.06.2020
 * Time: 15:05
 */

require 'conectare.php';

try {
    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectare cu succes';

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $varsta = $_POST['varsta'];
    $descriere = $_POST['descriere'];

    $query = "INSERT INTO exercitiu(nume, prenume, email, varsta, descriere)
             VALUES($nume, $prenume, $email, $varsta, $descriere)";
    $dbh->exec($query);
    echo 'A fost inserat ';}


catch(PDOException $error)
{
    echo $error->getMessage();
}