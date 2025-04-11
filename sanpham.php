
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogger Store</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header>
        <h1>Sang Store</h1>
        <input type="text" id="search" placeholder="Tìm kiếm sản phẩm..." />
        <a id="cart-btn" href="viewcart.php" >Giỏ hàng</a>
        <a id="cart-btn" href="login.php" >Đăng Nhập</a>
        
      
    </header>

    <main>
        <div class="product">
            <img src="./anh/6319980_rd.avif" alt="Laptop" />
            <h2>Laptop Gaming 1</h2>
            <p>Giá: 25,000,000 VNĐ</p>
            <form action="addcart.php" method="post">
                <input type="hidden" name="id" value="1" />
                <input type="hidden" name="img" value="./anh/6319980_rd.avif" />
                <input type="hidden" name="tensp" value="Laptop Gaming 1" />
                <input type="hidden" name="giasp" value="25000000" />
                <input type="submit" name="addcart" value="Thêm vào giỏ" />

            </form>
        </div>
        <div class="product">
            <img src="./anh/th.jpg" alt="Điện thoại" />
            <h2>iPhone 14 Pro 2</h2>
            <p>Giá: 30,000,000 VNĐ</p>
            <form action="addcart.php" method="post">
                <input type="hidden" name="id" value="2" />
                <input type="hidden" name="img" value="./anh/th.jpg" />
                <input type="hidden" name="tensp" value="iPhone 14 Pro 2" />
                <input type="hidden" name="giasp" value="30000000" />
                <input type="submit" name="addcart" value="Thêm vào giỏ" />

            </form>
        </div>
        <div class="product">
            <img src="./anh/dongho.jpg" alt="Đồng hồ" />
            <h2>Apple Watch 3</h2>
            <p>Giá: 10,000,000 VNĐ</p>
            <form action="addcart.php" method="post">
                <input type="hidden" name="id" value="3" />
                <input type="hidden" name="img" value="./anh/dongho.jpg" />
                <input type="hidden" name="tensp" value="Apple Watch 3" />
                <input type="hidden" name="giasp" value="10000000" />
                <input type="submit" name="addcart" value="Thêm vào giỏ" />

            </form>
        </div>
        <div class="product">
            <img src="./anh/maytinhbang.jpg" alt="Máy tính bảng" />
            <h2>iPad Air 4</h2>
            <p>Giá: 15,000,000 VNĐ</p>

            <form action="addcart.php" method="post">
                <input type="hidden" name="id" value="4" />
                <input type="hidden" name="img" value="./anh/maytinhbang.jpg" />
                <input type="hidden" name="tensp" value="iPad Air 4" />
                <input type="hidden" name="giasp" value="15000000" />
                <input type="submit" name="addcart" value="Thêm vào giỏ" />

            </form>
        </div>
        <div class="product">
            <img src="./anh/tainghe.jpg" alt="Tai nghe" />
            <h2>AirPods Pro 5</h2>
            <p>Giá: 5,000,000 VNĐ</p>
            <form action="addcart.php" method="post">
                <input type="hidden" name="id" value="5" />
                <input type="hidden" name="img" value="./anh/tainghe.jpg" />
                <input type="hidden" name="tensp" value="AirPods Pro 5" />
                <input type="hidden" name="giasp" value="5000000" />
                <input type="submit" name="addcart" value="Thêm vào giỏ" />

            </form>
        </div>
    </main>

</body>

</html>