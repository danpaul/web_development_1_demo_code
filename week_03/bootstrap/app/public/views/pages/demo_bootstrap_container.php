<?php

require(__DIR__ . "/../partials/header.php");

$bootstrap_breakpoint_classes = [
    "container",
    "container-sm",
    "container-md",
    "container-lg",
    "container-xl",
    "container-xxl",
    "container-fluid",
];
$number_of_columns = 5;

?>

<?php foreach ($bootstrap_breakpoint_classes as $breakpoint_class) { ?>
    <div
        class="<?= $breakpoint_class; ?> mb-5"
        style="outline: solid red;">
        <h2><?= $breakpoint_class ?></h2>
        <?php for ($i = 1; $i < $number_of_columns; $i++) { ?>
            <div class="row" style="outline: solid green;">
                <?php for ($j = 0; $j <= $i; $j++) { ?>
                    <div class="col" style="outline: solid blue;">
                        <h4>Column: <?= $j + 1; ?></h4>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php
require(__DIR__ . "/../partials/footer.php");
