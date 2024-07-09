<?php
require('./ajax/index_ajax.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h2>Users</h2>
    <a href="create.php">Create User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php 
        $i=1;
            foreach($values as $result){
                echo "<tr>
                    <td>".$i."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    <td>
                    <div style='display: flex'>
                        <form method='post' action='./ajax/detail_ajax.php'>
                            <input type='hidden' name='id' value='".$result['id']."'>
                            <button>Detail</button>
                        </form>
                        <form method='post' action='./ajax/delete_ajax.php'>
                            <input type='hidden' name='id' value='".$result['id']."'>
                            <button>Delete</button>
                        </form>
                        <form method='post' action='./update.php'>
                            <input type='hidden' name='id' value='".$result['id']."'>
                            <input type='hidden' name='name' value='".$result['name']."'>
                            <input type='hidden' name='email' value='".$result['email']."'>
                            <button>Update</button>
                        </form>
                    </div>
                    </td>
                </tr>";
                $i++;
            }
        ?>
    </table>
</body>
</html>
