<?php
require_once 'password.php';
$filename = 'dates.json';
$updated = false;
$correctPassword = isset($_POST['password']) && password_verify($_POST['password'], PASSWORD_HASH);
if (isset($_POST['dates']) && ($correctPassword)) {
    file_put_contents($filename, json_encode(explode(PHP_EOL,trim($_POST['dates']))));
    $updated = true;
}
if (!file_exists($filename)) {
    file_put_contents($filename, json_encode([]));
}
$dates = json_decode(file_get_contents($filename));
?>
<?= (!$correctPassword && isset($_POST['dates'])) ? '<strong>Falsches Passwort</strong>' : ''?>
<?php if ($updated): ?>
    Neue Daten:
    <ul>
        <?php foreach ($dates as $date) {echo '<li>' . $date . '</li>';} ?>
    </ul>
<?php endif; ?>
<form method="post">
    <p><textarea name="dates" rows="<?=sizeof($dates);?>"><?= implode(PHP_EOL, $dates);?></textarea></p>
    <p><input type="password" name="password" placeholder="Passwort"></p>
    <p><input type="submit" value="Speichern"></p>
</form>
