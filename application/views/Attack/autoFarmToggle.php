<?php
if (!defined('APP_PATH') && !isset($database)) {
    include_once(dirname(__DIR__, 2) . "/Database.php");
}

$slot = isset($_POST['slot']) ? intval($_POST['slot']) : 0;
$state = isset($_POST['state']) ? intval($_POST['state']) : 0;

if ($slot > 0 && isset($database)) {
    $database->query("UPDATE raidlist SET autofarm=" . $state . " WHERE id=" . $slot);
}
