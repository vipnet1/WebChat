<?php

session_start();

include_once 'db.conn.php';

$allText = "";

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $allText .= $row['author'].": ".$row['body']."\n\n";
}

$_SESSION['msg'] = $allText;

header("Location: ../protectedChat.php");