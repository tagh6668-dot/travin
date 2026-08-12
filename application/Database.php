<?php
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

// Load per-server config.php from application/ directory, or fallback if needed
if (file_exists(__DIR__ . '/config.php')) {
    require_once(__DIR__ . '/config.php');
} else if (file_exists(__DIR__ . '/../../../c/config.php')) {
    require_once(__DIR__ . '/../../../c/config.php');
}

include(realpath(__DIR__) . "/Database/db_MYSQL.php");
