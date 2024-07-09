view-> ajax->classs->ajax->view
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>
    <form method="post" action="./ajax/create_ajax.php">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Create">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
