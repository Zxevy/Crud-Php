<?php

include_once("database.php");

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM users WHERE ID=$id");

header("Location:index.php");
