<?php

session_start();

$username = $_SESSION['username'] ?? 'Guest';
?>


<h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>