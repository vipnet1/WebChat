
<?php

session_start();

$_SESSION['nickname'] = $_POST['nickname'];

if(isset($_POST['updateButton'])) {
    $_SESSION['body'] = $_POST['body'];
    header("Location: db.update.php");
    exit();
}
else if(isset($_POST['submit'])) {

$body = $_POST['body'];
$author = $_POST['nickname'];

if(empty($body) or empty($author))
{
    header("Location: ../protectedChat.php?error=empty");
    exit();
}

include_once 'db.conn.php';

$sql = "INSERT INTO post VALUES(?, ?);";

$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);

mysqli_stmt_bind_param($stmt, "ss", $body, $author);
mysqli_stmt_execute($stmt);

header("Location: db.update.php");
}