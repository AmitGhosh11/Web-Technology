<?php
session_start();
session_destroy();

setcookie("username", "", time() - 3600, "/"); // delete the cookie

header("Location: customer_php_validation.php");
exit();