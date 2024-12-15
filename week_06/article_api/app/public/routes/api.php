<?php

require_once(__DIR__ . "/../controllers/ArticleController.php");

// handle getting all articles from an API request
Route::add('/api/articles', function () {
    $articleController = new ArticleController(); // create a new article controller
    $articles = $articleController->getAll(); // get data
    echo json_encode($articles); // encode to JSON
});

// handle posting a new article from an API request
Route::add('/api/article', function () {
    $articleController = new ArticleController(); // create a new article controller
    $articleController->createFromApi();
}, "POST");
