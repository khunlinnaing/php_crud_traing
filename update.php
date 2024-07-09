<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form method="post" action="./ajax/update_ajax.php">
        <input type='hidden' name='id' value='<?php  echo $_POST['id']?>'>
        Name: <input type="text" name="name" value="<?php  echo $_POST['name']?>" required><br>
        Email: <input type="email" name="email" value="<?php  echo $_POST['email']?>" required><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
