<?php

$hashed_username = password_hash('admin', PASSWORD_DEFAULT);
$hashed_password = password_hash('password', PASSWORD_DEFAULT);

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    !password_verify($_SERVER['PHP_AUTH_USER'], $hashed_username) || 
    !password_verify($_SERVER['PHP_AUTH_PW'], $hashed_password)) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access Denied';
} else {
    header('Location: task1.php'); 
}
?>