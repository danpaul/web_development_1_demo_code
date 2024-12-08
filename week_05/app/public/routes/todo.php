<?php

// handle request for main todo app
Route::add('/todo', function () {
    // simply load the view since we are not using any dynamic DB data
    require_once(__DIR__ . "/../views/pages/todo.php");
});

// handle request for todo app solution - DON'T LOOK AT THIS YET!
Route::add('/todo-solution', function () {
    // simply load the view since we are not using any dynamic DB data
    require_once(__DIR__ . "/../views/pages/todo_solution.php");
});
