<?php
require 'classes/Database.php';
require 'classes/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$result = $user->read();
$values=$result;
?>