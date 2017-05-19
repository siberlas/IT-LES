<?php
/**
 * Created by PhpStorm.
 * User: plaf
 * Date: 30/04/2017
 * Time: 01:59
 */
include('connection.php');


$nbCreator= $bdd->query('select COUNT(*) as creator from candidat where candidatType = "creator" ');
$nbGamer= $bdd->query('select COUNT(*) as gamer from candidat where candidatType = "gamer" ');
$nbCreator = $nbCreator->fetch();
$nbGamer = $nbGamer->fetch();
var_dump($nbGamer);
?>