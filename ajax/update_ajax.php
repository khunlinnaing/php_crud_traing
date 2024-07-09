<?php
require '../classes/Database.php';
require '../classes/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result=$user->update($_POST);
    
    if ($result == 1){
        header("Location: ../index.php");
    } else {
        echo "Unable to update user.";
    }
} else {
    echo $_SERVER['REQUEST_METHOD'];
}
?>