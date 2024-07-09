<?php
require '../classes/Database.php';
require '../classes/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($_SERVER['REQUEST_METHOD'] =='POST'){
    $result = $user->readOne($_POST);
    if ($result) {
        echo '
        <h1>'.$result["name"].' Detail</h1>
        <div>
            name: <span>'.$result["name"].'</span><br>
            email: <span>'.$result["email"].'</span>
            <a href="../index.php">Back to Home</a>
        </div>';
    } else {
        echo "Unable to delete user.";
    }
}
?>