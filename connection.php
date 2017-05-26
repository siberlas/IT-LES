<?php
try
{
    $bdd = new PDO('mysql:host=itlesfrazuadm.mysql.db;dbname=itlesfrazuadm', 'itlesfrazuadm', 'nx78azmtM');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>