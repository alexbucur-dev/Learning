<?php
require 'conectare.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $dbh = new PDO("pgsql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $error)
{
    echo $error->getMessage();}
$sql_select_categeorie = '';

$sql = "SELECT * FROM categorii2;";
$datas = $dbh->query($sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $varsta = $_POST['varsta'];
    $descriere = $_POST['descriere'];
    $categorie = $_POST['categorie'];

    //print_r($_POST);die;
    $sql = "INSERT INTO public.exercitiu2(nume, prenume, email, varsta, descriere,categorie)
                VALUES (:nume, :prenume, :email, :varsta, :descriere,:categorie)
                on conflict (email) do update set nume = :nume , prenume = :prenume,varsta = :varsta,descriere = :descriere , categorie = :categorie;
                ";

    $stmt = $dbh->prepare($sql);
    $stmt->execute([':nume' => $nume, ':prenume' => $prenume, ':email' => $email, ':varsta' => $varsta, ':descriere' => $descriere,':categorie' => $categorie]);

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-left">Contactati-ne</h1>
                    <small>Completati datele dumneavoastra</small>
                </div>
                <div class="col-md-6">
                    <span class="glyphicon glyphicon-send"></span>
                </div>
            </div>
        </div>
    </div>






    <form method="POST" action="ss1.php" class="main-form">


        <div class="form-group">
            <label class="label control-label" >Nume</label>
            <input type="text" id="name" class="form-control" placeholder="Nume"name="nume">
        </div>
        <div class="form-group">
            <label class="label control-label">Prenume</label>
            <input type="text" id="prenume" class="form-control" placeholder="Prenume" name="prenume">
        </div>

        <div class="email">
            <label class="label control-label">Email</label>
            <input type="text" id="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="name">
            <label class="label control-label">Varsta</label>
            <input type="number" id="varsta" class="gt-input" placeholder="Varsta" name="varsta">
        </div>

        <div class="form-group">
            <label class="label control-label">Descriere</label>
            <textarea name="descriere" id="message" placeholder="Adaugati o descriere" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="categorie">Lista:</label>
            <select name="categorie" id="categorie">
                <?php while($row = $datas->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['denumire'];?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" class="btn btn-danger" value="Trimite">
    </form>
</div>

</body>

</html>