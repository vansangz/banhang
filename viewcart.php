<?php
session_start();

if (isset($_SESSION['cart'])) {



?>
    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giỏ hàng</title>
        <link rel="stylesheet" href="viewcart.css">
    </head>

    <body>
        <h1>Giỏ hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tong = 0;
                foreach ($_SESSION['cart'] as $sp) {
                    $thanhtien = $sp[3] * $sp[4];
                    $tong += $thanhtien;
                    echo '<tr>
                <td>' . $sp[0] . '</td>
                <td><img src="' . $sp[1] . '" alt="Sản phẩm 1" width="100"></td>
                <td>' . $sp[2] . '</td>
                <td>' . $sp[3] . '</td>
                <td>' . $thanhtien . '</td>
            </tr>';
                }
                ?>

            </tbody>
            <tr>
                <td colspan="4" a>Tổng đơn hàng </td>
                <td style="background-color: red;"><?php echo $tong; ?>VND</td>

            </tr>
        </table>
        <a href="sanpham.php">tiếp tục đặt hàng</a>
        <a href="deletecar.php">xóa giỏ hàng</a>
    </body>

    </html>
<?php
} else {
    echo '<br>bạn chưa đặt hàng <a href="sanpham.php">ấn vô đây để đặt hàng</a>';
}
?>