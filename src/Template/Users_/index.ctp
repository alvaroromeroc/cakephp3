<h1>USERS</h1>

<ul>
    <?php foreach($users as $user): ?>
    <li>
        <?= $user->email ?>
    </li>
    <?php endforeach; ?>
</ul>