<?php

include_once("database.php");

if (isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Role = $_POST['Role'];


    $result = mysqli_query($connect, "UPDATE users SET Username='$Username',Password='$Password',Role='$Role' WHERE ID=$ID");


    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM users WHERE ID=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $Username = $user_data['Username'];
    $Password = $user_data['Password'];
    $Role = $user_data['Role'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" value=<?php echo $Username; ?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="Password" value=<?php echo $Password; ?>></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="Role" value=<?php echo $Role; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>