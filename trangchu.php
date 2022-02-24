
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
</head>
<html>

<body>
    <div id="container">
        <div class="header" id="header">
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

                    <li class="navbar-list-item"><a href="dangnhapmoiduoc.php" >Giỏ hàng</a></li>
                    <li class="navbar-list-item"><a href="" id="dangnhap">Đăng nhập</a> </li>
                    <li class="navbar-list-item"><a href="" id="dangky">Đăng ký</a> </li>
                </ul>
                <div class="header__search">
                        <input type="text" onkeyup="showSearchResult(this.value)" class="header__search-input" placeholder="Tìm kiếm" >
                        <i class="header__search-icon fas fa-search"></i>
                </div>
            </nav>
        </div>
        <div class="slider" id="slider">
        </div>

        <h3 class="title" id="title">TẤT CẢ SẢN PHẨM</h3>

        <div class="main" id="main">
            <div class="grid ">
                <div class="row" id="row">
                    <?php
                        include("tatcasanpham.php");
                    ?>
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

    <script src="./script.js"></script>
</body>

</html>