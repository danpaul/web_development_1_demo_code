<?php

// handle GET request for login form demo
Route::add('/demo/bootstrap-login', function () {
    require(__DIR__ . "/../views/pages/demo_boostrap_login.php");
});

// handle POST request from login form demo (submitting the data)
Route::add('/demo/bootstrap-login', function () {
    // normally we would have a controller take over from here...
    echo "form data submitted: </br>";
    var_dump($_POST);
}, "POST");

// bootstrap container demo
Route::add('/demo/bootstrap-container', function () {
    require(__DIR__ . "/../views/pages/demo_bootstrap_container.php");
});

// bootstrap container demo
Route::add('/demo/bootstrap-basic-layout', function () {
    require(__DIR__ . "/../views/pages/demo_bootstrap_basic_layout.php");
});

// bootstrap modal demo
Route::add('/demo/bootstrap-modal', function () {
    require(__DIR__ . "/../views/pages/demo_bootstrap_modal.php");
});

// bootstrap modal demo
Route::add('/demo/bootstrap-products', function () {
    require(__DIR__ . "/../views/pages/demo_bootstap_products.php");
});
