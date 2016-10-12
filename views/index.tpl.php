<?php require('views/partials/head.php')?>


    <ul>
        <?php foreach($users as $user) :?>
            <li><?= $user->name; ?></li>
            <li><?= $user->address; ?></li>
        <?php endforeach; ?>
    </ul>

<?php require('views/partials/foot.php')?>