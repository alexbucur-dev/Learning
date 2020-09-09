<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 08.06.2020
 * Time: 17:28
*/
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {

    require 'conectare.php';

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE employees (
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
      )";

    $dbh->exec($sql);

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}










