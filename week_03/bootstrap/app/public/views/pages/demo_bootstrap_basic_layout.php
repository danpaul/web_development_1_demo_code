<?php

require(__DIR__ . "/../partials/header.php");
$lipsum_text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";

?>

<div class="container-fluid flex-grow-1 d-flex flex-column">
    <div class="row border">
        <div class="col">
            <h2>Banner</h3>
        </div>
    </div>
    <div class="row flex-grow-1">
        <div class="col-12 col-md-3 border">
            <h4>Menu</h4>
        </div>
        <div class="col-12 col-md-9">
            <h4>Main Content</h4>
            <?= $lipsum_text; ?>
            <?= $lipsum_text; ?>
            <div class="row">
                <div class="col-12 col-md-4 border">Feature 1</div>
                <div class="col-12 col-md-4 border">Feature 2</div>
                <div class="col-12 col-md-4 border">Feature 3</div>
            </div>
            <?= $lipsum_text; ?>
            <?= $lipsum_text; ?>
        </div>
    </div>
</div>

<?php
require(__DIR__ . "/../partials/footer.php");
