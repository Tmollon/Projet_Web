<?php

class AfficherCategorie{



function DecodeJson(string $categorie)
{
    $json = json_decode(file_get_contents("http://localhost/REST/lire.php"));
    echo($json);
}}
