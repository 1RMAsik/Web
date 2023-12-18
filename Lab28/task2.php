<?php
session_start();

$storedUsername = 'admin';
$storedPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if ($enteredUsername == $storedUsername && $enteredPassword == $storedPassword) {
        $_SESSION['username'] = $enteredUsername;
        echo "Login successful. Welcome, " . htmlspecialchars($enteredUsername) . "!";
    } else {
        echo "Login failed. Incorrect username or password.";
    }
}
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Login">
</form>