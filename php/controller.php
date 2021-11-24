<?php

require('model.php');

function Accueil()
{
    require('var/www/html/Projet_web/Page/Accueil.html');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}