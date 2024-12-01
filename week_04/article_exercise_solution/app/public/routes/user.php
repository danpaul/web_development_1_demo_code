<?php

// require the user controller so we can use it in this file
require_once(__DIR__ . "/../controllers/UserController.php");

// any request for the /users route will be handled by this function
Route::add('/users', function () {
    $userController = new UserController(); // create a new user controller
    $users = $userController->getAll(); // get data data for the view
    require_once(__DIR__ . "/../views/pages/users.php"); // load the view
});

// any request for a specific user will be handled by this route, i.e. /user/2
// the dynamic part of the url path gets passed in as the $userId variable
Route::add('/user/([a-z-0-9-]*)', function ($userId) {
    $userController = new UserController(); // create a new user controller
    $user = $userController->get($userId); // get data for the view
    require_once(__DIR__ . "/../views/pages/user.php"); // load the view
});
