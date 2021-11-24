<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=drugs;charset=utf8', 'root', 'password');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$recipesStatement = $db->prepare('SELECT * FROM Client');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
var_dump ($recipes);


?>