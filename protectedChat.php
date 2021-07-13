
<?php
include 'header.php';
?>

<body id="bodyID">

<form method="POST" action="includes/db.post.php">

<div id="main">

    <div id="divNickname">
        <label id="nicknameLbl" for="nickname" >Nickname: &nbsp</label>
<?php

session_start();
$v = $_SESSION['nickname'];
echo '<input type="text" id="nickname" value='.$v.' name="nickname" >';

?>
        
    </div>

<?php

if(isset($_SESSION['body'])) {
    echo '<textarea rows=10 cols=30 id="textArea" name="body">'.$_SESSION['body'].'</textarea>';
    unset($_SESSION['body']);
} else {
    echo '<textarea rows=10 cols=30 id="textArea" name="body"></textarea>';
}

?>
<br>
<button type="submit" name="submit" class="postButton">

<span></span>

Post</button>
<button type="submit" name="updateButton" class="postButton">Update</button>
</div>

<?php
$var = "";
if(isset($_SESSION['msg']))
{
    $var = $_SESSION['msg'];
}
echo '<textarea readonly id="forumArea" rows=10000 cols=60 id="textArea">'.$var.'</textarea>';
?>

</form>

</body>