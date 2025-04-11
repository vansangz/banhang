<?php 
session_start();

if (isset($_POST['addcart']) && $_POST['addcart']) {
    $id = htmlspecialchars($_POST['id']);
    $img = htmlspecialchars($_POST['img']);
    $tensp = htmlspecialchars($_POST['tensp']);
    $giasp = htmlspecialchars($_POST['giasp']);
    $sl=1;
    // Tạo mảng sản phẩm
    $sp = array($id, $img, $tensp, $giasp,$sl);
    

    // Kiểm tra và thêm vào session giỏ hàng
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $sp);

    // Chuyển hướng đến trang giỏ hàng
    header('Location: viewcart.php');
    exit;
} else {
    echo 'Không nhận được dữ liệu từ form.';
}

     
?>