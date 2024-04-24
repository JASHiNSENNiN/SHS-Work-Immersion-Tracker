<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;

$_SESSION['user_id'] = null;

session_destroy();

header("Location: /SHS-Work-Immersion-Tracker/index.php");
exit;