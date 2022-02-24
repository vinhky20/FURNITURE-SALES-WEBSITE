<?php
require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="dangky.css">
</head>
<body>

    <div class="login-form">
        <form action = "dangky.php" method = "post">
            <div class="login-form-list" >
                <div class="login-form-item">
                    <i class="fas fa-user login-form-item-icon "></i>
                    <input type = "text" class = "login-form-item-input" name = "username" placeholder = "Tên đăng nhập" required = "">
                </div>
                <div class="login-form-item">
                    <i class="fas fa-key login-form-item-icon"></i>
                    <input type = "password" class = "login-form-item-input" name = "pass" placeholder = "Mật khẩu" required = "">
                </div>
            </div>  
            <div class="login-form-list" >
                <div class="login-form-item">
                    <i class="login-form-item-icon fas fa-signature"></i>
                    <input type = "text" class = "login-form-item-input" name = "fullname" placeholder = "Họ và tên" required = "">
                </div>
                <div class="login-form-item">
                    <i class="login-form-item-icon fas fa-mobile-alt"></i>
                    <input type = "text" class = "login-form-item-input" name = "phonenumber" placeholder = "Số điện thoại" required = "">
                </div>
            </div>
            <div class="login-form-list" >
                <div class="login-form-item">
                    <i class="login-form-item-icon fas fa-map-marker-alt"></i>
                    <input type = "text" class = "login-form-item-input" name = "diachi" placeholder = "Địa chỉ" required = "">
                </div>
                <div class="login-form-item">
                    <i class="login-form-item-icon far fa-envelope"></i>
                    <input type = "email" class = "login-form-item-input" name = "email" placeholder = "Email" required = "">
                </div>
            </div>
                <div class="login-form-btn">
                    <input type = "submit" class = "login-form-btn-submit" name = "signup" value = "ĐĂNG KÝ">
                </div>
            
        </form>
    </div>

<?php
    if (isset($_POST['signup'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];

        $query = mysqli_query($conn, "INSERT INTO `tbl_user`(`username`, `pass`, `fullname`, `phonenumber`, `diachi`, `email`) VALUES ('$username','$pass','$fullname','$phonenumber','$diachi','$email'); ");
        if ($query) {
            $_SESSION["signup"] = $fullname;
            $_SESSION["id_user"] = mysqli_insert_id($conn);
        }
        header("Location:trangchu.php");
    }
    
?>

</body>
</html>