<?php

if (!empty($users)) {
    foreach ($users as $user) { ?>
        <div>
            <h2>
                <a href="/user/<?= $user->id; ?>">
                    <?= $user->username; ?>
                </a>
            </h2>
        </div>
    <?php } ?>
<?php } ?>