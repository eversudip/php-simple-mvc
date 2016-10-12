<?php require('views/partials/head.php')?>


    <ul>
        <?php foreach($users as $user) :?>
            <li><?= $user->name; ?></li>
            <li><?= $user->address; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>submit form</h1>

    <form method="post" action="addname">
    	<input type="text" name="name">
    	<button type="submit">Submit</button>
    	
    </form>

<?php require('views/partials/foot.php')?>