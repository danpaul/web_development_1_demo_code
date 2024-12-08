<?php

// handle request for js demos
Route::add('/js-demo', function () {
    // simply load the view since we are not using any dynamic DB data
    require_once(__DIR__ . "/../views/pages/js_demo.php");
});

// handle request js slider demos
Route::add('/js-demo-slider', function () {
    // simply load the view since we are not using any dynamic DB data
    require_once(__DIR__ . "/../views/pages/js_demo_slider.php");
});

// handle request js slider demos
Route::add('/js-demo-slider-solution', function () {
    // simply load the view since we are not using any dynamic DB data
    require_once(__DIR__ . "/../views/pages/js_demo_slider_solution.php");
});
