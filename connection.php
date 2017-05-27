<?php
try
{
    //$bdd = new PDO('mysql:host=itlesfrazuadm.mysql.db;dbname=itlesfrazuadm', 'itlesfrazuadm', 'nx78azmtM');
    $bdd = new PDO('mysql:host=localhost;dbname=it-les', 'root', '');


}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>