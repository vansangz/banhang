<?php
session_start();
ob_start();

if (isset($_POST['login']) && $_POST['login']) {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($email === 'user@example.com' && $password === '123456') {
        $_SESSION['email'] = $email;
        $_SESSION['admin'] = true;
        header('Location: trangchu.php');
        exit;
    } else {
        $_SESSION['error'] = 'Sai tên đăng nhập hoặc mật khẩu.';
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
