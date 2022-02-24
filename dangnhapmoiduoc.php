<?php

session_start();
require 'connect.php';

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dangnhap.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.2-web/css/all.min.css">
</head>
<body>
    <div class="dangnhap">
        <h1>Vui lòng đăng nhập để vào tính năng giỏ hàng</h1>
        <div class="login-form">
            
            <form action = "dangnhap.php" method = "post">
                <div class="login-form-list" >
                    
                    <div class="login-form-item">
                        <i class="fas fa-user login-form-item-icon "></i>
                        <input type = "text" class = "login-form-item-input" name = "username" placeholder = "Username" required = ""><br/>
                    </div>
                    <div class="login-form-item">
                        <i class="fas fa-key login-form-item-icon"></i>
                        <input type = "password" class = "login-form-item-input" name = "pass" placeholder = "Password" required = ""><br/>
                    </div>
                    <div class="login-form-btn">
                        <input type = "submit" class = "login-form-btn-submit" name = "login" value = "ĐĂNG NHẬP">
                    </div>
                </div>
            </form>
        </div>
    </div> -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="dangnhap.css">
</head>
<html>

<body>
    <div id="container">
        <div class="header" id="header" style="position: relative;">
            <div class="banner">
                <p>Thanks for your choice, we hope you will be satisfied ...</p>
            </div>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-list-item"><a href="trangchu.php">Trang chủ</a></li>
                    <li class="navbar-list-item giuongngu">
                        <a href="">SẢN PHẨM</a>
                        <ul class="subnav">
                            <li class="navbar-list-item"><a href="" id="giuongngu">giường ngủ</a></li>
                            <li class="navbar-list-item"><a href="" id="ban">Bàn làm việc</a></li>
                            <li class="navbar-list-item"><a href="" id="ghe">Ghế</a></li>
                            <li class="navbar-list-item"><a href="" id="tranh">Tranh treo tường</a></li>
                            <li class="navbar-list-item"><a href="" id="den">Đèn</a></li>
                            <li class="navbar-list-item"><a href="" id="guong">GƯƠNG</a></li>
                        </ul>
                    </li>

                    <li class="navbar-list-item"><a href="dangnhapmoiduoc.php" id="">Giỏ hàng</a></li>
                    <li class="navbar-list-item"><a href="" id="dangnhap">Đăng nhập</a> </li>
                    <li class="navbar-list-item"><a href="" id="dangky">Đăng ký</a> </li>
                </ul>
                <div class="header__search">
                    <input type="text" onkeyup="showSearchResult(this.value)" class="header__search-input" placeholder="Tìm kiếm">
                    <i class="header__search-icon fas fa-search"></i>
                </div>
            </nav>
        </div>

        <h3 class="title" id="title">VUI LÒNG ĐĂNG NHẬP TRƯỚC KHI MUA HÀNG</h3>
        <div class="main" id="main">
            <div class="grid ">
                <div class="row" id="row">

                </div>
            </div>
        </div>
        <div class="main" id="ky">
            <div class="dangnhap">
                <div class="login-form">
                    <form action="dangnhap.php" method="post">
                        <div class="login-form-list">

                            <div class="login-form-item">
                                <i class="fas fa-user login-form-item-icon "></i>
                                <input type="text" class="login-form-item-input" name="username" placeholder="Username" required=""><br />
                            </div>
                            <div class="login-form-item">
                                <i class="fas fa-key login-form-item-icon"></i>
                                <input type="password" class="login-form-item-input" name="pass" placeholder="Password" required=""><br />
                            </div>
                            <div class="login-form-btn">
                                <input type="submit" class="login-form-btn-submit" name="login" value="ĐĂNG NHẬP">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="row">
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Giới thiệu</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Tuyển dụng</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Bàn làm việc</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Tủ chứa đồ</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Giường ngủ</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Tranh treo tường</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Đèn trang trí</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Ghế thiết kế</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">
                                    <i class="footer__list-item__icon fab fa-facebook"></i> Facebook
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">
                                    <i class="footer__list-item__icon fab fa-instagram"></i> Instagram
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">
                                    <i class="footer__list-item__icon fab fa-linkedin-in"></i> Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="./images/qr.png" alt="" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__download-app__link">
                                    <img src="./images/gg_chplay.png" alt="" class="footer__download-app-img">
                                </a>
                                <a href="" class="footer__download-app__link">
                                    <img src="./images/app_store.png" alt="" class="footer__download-app-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="grid">
                    <p class="footer__text">© 2021 - Bản quyền thuộc về Công ty 2TV</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="./scriptdn.js"></script>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $query = " SELECT * FROM tbl_user WHERE username = '$username' AND pass = '$pass'; ";
    $result = $conn->query($query)
        or die("Query failed: " . $conn->connect_error);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["username"] = $row['username'];
            $_SESSION["pass"] = $row['pass'];
        }
    }
}
if (isset($_SESSION["username"])) {
    header("Location:index.php");
}
?>
<!-- 
</body>
</html> -->