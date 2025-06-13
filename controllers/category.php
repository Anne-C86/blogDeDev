<?php

function categoryPage() : void
{
    $categoryId = $_GET['category'];

    require "managers/category_manager.php";

    getPostsForCategory($categoryId);

    $template = "templates/category.phtml";
    require "templates/layout.phtml";
}

?>