<?php

session_start();

$email = "sofisit@gmail.com";
$password = "123456";



if ($_POST['email'] === $email && $_POST['password'] === $password) {
    if (!count($_SESSION)) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }
    header("Location: panel.php");
} else {
    header("Location: index.php?error=invalidUserPassword");
}
?>