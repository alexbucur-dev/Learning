<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 12.06.2020
 * Time: 16:54
 */
require 'conectare.php';
try {
    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectare cu succes';

    $query = "INSERT INTO exercitiu(nume, prenume, email, varsta, descriere)
             VALUES('Bidonss', 'Marcel', 'xx@gmail.com', '21', 'sadasda')
             on conflict (nume) do nothing";
    $dbh->exec($query);
    echo 'A fost inserat ';}


catch(PDOException $error)
{
    echo $error->getMessage();}