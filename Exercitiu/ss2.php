<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 13.06.2020
 * Time: 12:50
 */
/*
require 'conectare.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectare cu succes';}
catch(PDOException $error)
{
    echo $error->getMessage();}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transporturi = $_POST['transporturi'];
    $comunicatii = $_POST['comunicatii'];
    $restaurant = $_POST['restaurant'];


    $sql = "INSERT INTO public.exercitiu2(categorie)
    VALUES (:transporturi)
  
    ";

    $stmt = $dbh->prepare($sql);
    $stmt->execute([':transporturi' => $transporturi]);

}

*/

?>




<!DOCTYPE html>
<html>
<body>

<h1>Selectati categoria</h1>

<form action="ss1.php">
  <label for="categorie">Lista:</label>
  <select name="categorie" id="categorie">
    <option name=transporturi value="Transporturi">Transporturi</option>
    <option name=comunicatii value="Comunicatii">Comunicatii</option>
    <option name=restaurant value="Restaurant">Restaurant</option>
  </select>
  <br><br>
    <a href="ss1.php"><input type="submit" class="button_active" value="Trimite"></a>

</form>


</body>
</html>