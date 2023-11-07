<?php
session_start();


$_SESSION['authenticated'] = true;


$response = array("success" => true);
echo json_encode($response);
exit;
?>