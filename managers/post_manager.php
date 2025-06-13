<?php

function getPost(int $postId) : array
{
    // remplissez cette fonction avec une requete qui permet de récupérer toutes les infos d'un post
    require __DIR__ . "/../connexion.php";
    $query = $db->prepare("SELECT posts.* FROM posts WHERE posts.id = :postId");
    $parameters = [
        'postId' => $postId
    ];
    $query->execute($parameters);
    $post = $query->fetch(PDO::FETCH_ASSOC);
    return $post;
}

?>