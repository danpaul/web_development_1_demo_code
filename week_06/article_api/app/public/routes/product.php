<?php

// any request for a specific user will be handled by this route, i.e. /user/2
// the dynamic part of the url path gets passed in as the $userId variable
Route::add('/product/([a-z-0-9-]*)', function ($productId) {
    var_dump($productId);
});


Route::add('/products', function () {
    echo "in products route";
});
