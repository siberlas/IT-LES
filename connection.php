<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=it-les', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>