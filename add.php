<html>

<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="Password"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="Role"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['Submit'])) {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Role = $_POST['Role'];

        include_once("database.php");

        $result = mysqli_query($connect, "INSERT INTO users(Username,Password,Role) VALUES('$Username','$Password','$Role')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>