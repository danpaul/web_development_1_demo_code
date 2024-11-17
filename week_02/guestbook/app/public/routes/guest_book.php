<?php

require_once(__DIR__ . "/../controllers/GuestBookController.php");

Route::add('/guestbook', function () {

    $guestBookController = new GuestBookController();
    // if data is being posted, first create entry
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // die("asdf");
        $guestBookController->createEntry();
    }

    // load guestbook entries
    $guestbookMessages = $guestBookController->getAll();

    // display guestbook entries
    require(__DIR__ . "/../views/pages/guest_book.php");
}, ["get", "post"]);
