<?php
session_start(); // Khởi động session
session_destroy(); // Hủy toàn bộ session để kết thúc phiên làm việc
header('Location: sanpham.php'); // Chuyển hướng về trang chính sau khi đăng xuất
exit;
?>
