<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 08.06.2020
 * Time: 18:09
 */

require 'conectare.php';
// Selectare date
$sql = "SELECT * FROM users";
$datas = $dbh->query($sql);
//print_r($datas->fetchAll());
// Se parcurg datele si le afiseaza
while($row = $datas->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'] . ' / ' . $row['email'] . ' / ' . $row['nume'] . ' / ' . $row['prenume'] . '<br />';
}
    $dbh = null;        // Deconectare
