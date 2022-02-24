<?php
    session_start();
    require 'connect.php';
    if (isset($_POST["update"])) {
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $value){
                if ($_POST["so_luong".$value["id_sanpham"]] <= 0){
                    unset($_SESSION["cart"][$value["id_sanpham"]]);
                } else {
                    $_SESSION["cart"][$value["id_sanpham"]]["so_luong"] = $_POST["so_luong".$value["id_sanpham"]];
                }
            }

        }
    }

    if (isset($_POST["thanhtoan"])) {
        $id_khachhang = $_SESSION['id_user'];
        $code_order = rand(0,9999);
        $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
        $cart_query = mysqli_query($conn,$insert_cart);
        if($cart_query){
            foreach($_SESSION['cart'] as $key => $value){
                $id_sanpham = $value['id_sanpham'];
                $soluong = $value['so_luong'];
                $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
                mysqli_query($conn,$insert_order_details);
            }

        }
        unset($_SESSION["cart"]);

        header('Location:camon.php');

    }
?>
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
    <link rel="stylesheet" href="shopping.css">
</head>
<html>

<body>
    <div id="container">
        <div class="header" id="header" style="position: relative; " >
            <div class="banner">
                <p>Thanks for your choice, we hope you will be satisfied ...</p>
            </div>
            <nav class="navbar" style="border-bottom: 2px solid black" >
                <ul class="navbar-list">
                    <li class="navbar-list-item"><a href="index.php">Trang chủ</a></li>
                    <li class="navbar-list-item giuongngu">
                        <a href="">SẢN PHẨM</a>
                        <ul class="subnav">
                            <li class="navbar-list-item"><a href="" id="giuongnguU">giường ngủ</a></li>
                            <li class="navbar-list-item"><a href="" id="banU">Bàn làm việc</a></li>
                            <li class="navbar-list-item"><a href="" id="gheU">Ghế</a></li>
                            <li class="navbar-list-item"><a href="" id="tranhU">Tranh treo tường</a></li>
                            <li class="navbar-list-item"><a href="" id="denU">Đèn</a></li>
                            <li class="navbar-list-item"><a href="" id="guongU">GƯƠNG</a></li>
                        </ul>
                    </li>

                    <li class="navbar-list-item"><a href="shopping.php" id="giohang">Giỏ hàng</a> </li>
                    <li class="navbar-list-item"><a href=""><?php echo $_SESSION["username"]; ?></a> </li>
                    <li class="navbar-list-item"><a href="logout.php">Đăng xuất</a> </li>
                </ul>
                <div class="header__search">
                        <input type="text" onkeyup="showSearchResultInUser(this.value)" class="header__search-input" placeholder="Tìm kiếm" >
                        <i class="header__search-icon fas fa-search"></i>
                </div>
            </nav>
        </div>

        <h3 class="title" id="title">GIỎ HÀNG HIỆN TẠI CỦA BẠN</h3>
        <div class="main">
            <div class="grid ">
                <div class="row" id="row">

                </div>
            </div>
        </div>

        <div class="main" id="main">
        <form action="shopping.php" method="post" style="margin:auto; width: 100%" >
            <table cellspacing=1 style="margin:auto; ">
                <thead  style="background-color:skyblue; line-height: 28px; " >
                    <tr>
                        <th style="width: 5%;">STT</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th  style="width: 15%;">TÊN SẢN PHẨM</th>
                        <th style="width: 10%;">ĐƠN GIÁ</th>
                        <th style="width: 15%;">SỐ LƯỢNG</th>
                        <th style="width: 15%;">THÀNH TIỀN</th>
                        <th style="width: 15%;">XOÁ SẢN PHẨM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        if (isset($_SESSION["cart"])){
                            $i = 0;
                            $tongtien = 0;
                            foreach ($_SESSION["cart"] as $value ){ 
                                $i++;
                                $tong = 0;
                                $tong = $value["giasp"]*$value["so_luong"];
                                $tongtien = $tongtien + $tong
                                ?>
                                <tr>
                                    <td align="center"><?php echo $i; ?></td>
                                    <td align="center"><img src="./images/<?php echo $value["hinhanh"]; ?>" alt=""></td>
                                    <td align="center"><?php echo $value["tensanpham"]; ?></td>
                                    <td align="center"><?php echo $value["giasp"]; ?></td>
                                    <td align="center"><input type="number" min="1" name="so_luong<?php echo $value["id_sanpham"]; ?>" value="<?php echo $value["so_luong"]; ?>"></td>
                                    <td align="center"><?php echo $tong; ?></td>
                                    <td align="center"><a  style="color: #1D2D44;" href="delete.php?id=<?php echo $value["id_sanpham"];?>">DELETE</a></td>
                                </tr>
                            <?php
                            }
                        }
                        else $tongtien = 0;
                    ?>

                    <tr>
                        <td colspan="7" align="center" style="line-height: 36px;">
                            <h3>TOTAL: <?php echo number_format ($tongtien,0,',','.').'VNĐ' ?></h3>
                    </td>

                    </tr>
                </tbody>
            </table>
            <br>
            <div class="button" style="margin: auto;">
                <button type="submit" name="update" style="cursor:pointer; border:none ; font-weight: bold; border-radius: 4px; background-color: skyblue; text-align:center; line-height: 24px; padding: 2px">
                        CẬP NHẬT
                </button>
                <button type="submit" name="thanhtoan" style="cursor:pointer; border:none ; font-weight: bold; padding: 2px; border-radius: 4px; background-color: skyblue; text-align:center; line-height: 24px;">
                        THANH TOÁN
                </button>
            </div>
        </form>
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

    <script src="./scriptgh.js"></script>
</body>

</html>
