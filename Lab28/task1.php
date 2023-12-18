<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
}
?>

<form method="post">
    <label for="username">Enter your name:</label>
    <input type="text" id="username" name="username" required>
    <input type="submit" value="Submit">
</form>

<a href="other_page.php">Go to other page</a>