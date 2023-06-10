<h1>You have loghout<h1>

<?php
session_start();

if(isset($_POST["logout"])) {
    session_destroy();
    header("Location: s_loginForm.html");
    exit();
} else {
    header("Location: s_homepage2.php");
    exit();
}
?>

