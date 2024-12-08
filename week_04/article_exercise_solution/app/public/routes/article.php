<?php

require_once(__DIR__. "/../controllers/ArticleController.php");

// handle getting all articles
Route::add('/articles', function () {
    $articleController = new ArticleController(); // create a new article controller
    $articles = $articleController->getAll(); // get data data for the view
    require_once(__DIR__ . "/../views/pages/articles.php"); // load the view
});

// handle creating an article
Route::add('/article', function () {
    $articleController = new ArticleController();
    $articleController->create($_POST);
    $articles = $articleController->getAll(); // get data data for the view
    require_once(__DIR__ . "/../views/pages/articles.php"); // load the view
}, ["post"]);

// handle getting an article by ID
Route::add('/article/([a-z-0-9-]*)', function ($articleId) {
    $articleController = new ArticleController();
    $article = $articleController->get($articleId); // get data data for the view
    require_once(__DIR__ . "/../views/pages/article.php"); // load the view
});

Route::add("/api/messages", function(){
    $messages = ["hello", "good-bye"];
    echo json_encode($messages);
});