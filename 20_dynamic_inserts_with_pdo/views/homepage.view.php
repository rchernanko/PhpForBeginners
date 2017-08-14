<!DOCTYPE html>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<html lang="en">

<h1>Submit Your Name</h1>

<form method="POST" action="/20_dynamic_inserts_with_pdo/names">
    <input name="name">
    <button type="submit">Submit</button>
</form>

</html>