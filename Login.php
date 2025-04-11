<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Tài Khoản</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .login-container {
            background-color: #000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .login-container h1 {
            color: #fff;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #00f;
            border-radius: 5px;
            outline: none;
            color: #fff;
            background-color: #000;
        }
        .login-container button {
            padding: 10px 20px;
            border: 1px solid #00f;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #00f;
            color: #000;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
    <form action="Loginprocessing.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>    
        <input type="submit" name="login" value="ĐĂNG NHẬP" />
    </form>
</div>

</body>
</html>
