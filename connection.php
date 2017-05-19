<?php
try
{
$bdd = new PDO('mysql:host=db680011459.db.1and1.com;dbname=db680011459;charset=utf8', 'dbo680011459', 'nx78azmtM%');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>