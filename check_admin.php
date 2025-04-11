<?php
session_start();

if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
    <!-- Nếu người dùng đã đăng nhập thành admin -->
    <a id="cart-btn" href="#">Admin</a>
<?php else: ?>
    <!-- Nếu chưa đăng nhập -->
    <a id="cart-btn" href="login.php">Đăng Nhập</a>
<?php endif;
?>
