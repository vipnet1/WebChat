

<?php
    include 'header.php';
?>

<body>

<form action="includes/db.login.php" method="POST" id="theForm">

    <div id="row">
    <label for="username" >Username:</label>

<?php

if(isset($_GET['username'])) {
    echo '<input name="usr" type="text" id="username" value='.$_GET['username'].'>';
} else {
    echo '<input name="usr" type="text" id="username">';
}

?>
    </div>

    <div id="row">
    <label for="password" >Password:</label>
    <input name="pass" type="password" id="password">
    </div>

    <button name="submit" id="submitButton" type="submit">Submit</button>

</body>