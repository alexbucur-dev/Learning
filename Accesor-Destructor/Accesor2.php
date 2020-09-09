<?php
/**
 * Created by PhpStorm.
 * User: ciub_
 * Date: 17.06.2020
 * Time: 14:13
 */
include('Accesor.php');        // Include clasa

// Creare instanta de obiect la clasa SiteClas, cu argumentele necesare
$objSite = new SiteClas('marplo.net', 'php-mysql');

$objSite->pagini('oop-clase-obiecte.html');        // Apelare metoda pagini()