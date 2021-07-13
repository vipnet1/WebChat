<?php

if(!isset($_POST['submit'])) {
    header("Location: ../index.php?login=fail");
    exit();
}

include_once 'db.conn.php';

$sql = "SELECT * FROM usr WHERE username=? AND pass=?;";

$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_bind_param($stmt, "ss", $_POST['usr'], $_POST['pass']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) === 1) {
    session_start();
    $_SESSION['nickname'] = $_POST['usr'];
    header("Location: db.update.php");
} else {
    header("Location: ../index.php?login=fail&username=".$_POST['usr']);
}