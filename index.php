<?php
include_once("database.php");
$result = mysqli_query($connect, "select * from users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="add.php">Add New User</a><br /><br />
    <table width='80%' border=1>

        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Select</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['Username'] . "</td>";
            echo "<td>" . $user_data['Password'] . "</td>";
            echo "<td>" . $user_data['Role'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[ID]'>Edit</a> | <a href='delete.php?id=$user_data[ID]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>