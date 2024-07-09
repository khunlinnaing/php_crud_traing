<?php
require '../classes/Database.php';
require '../classes/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result=$user->create($_POST);
    if($result) {
        header("Location: ../index.php");
    } else {
        echo "Unable to create user.";
    }
}
?>