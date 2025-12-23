<?php
// JANGAN session_start() DI SINI

unset($_SESSION['is_login']);
unset($_SESSION['username']);
unset($_SESSION['nama']);

header("Location: /lab11_php_oop/user/login");
exit;
