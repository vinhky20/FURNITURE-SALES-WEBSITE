<?php
session_start();
require 'connect.php';
?>

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
    </div>

<?php
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $query =" SELECT * FROM tbl_user WHERE username = '$username' AND pass = '$pass'; ";
        $result = $conn->query($query)
            or die("Query failed: " . $conn->connect_error);
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $_SESSION["username"] = $row['username'];
                $_SESSION["pass"] = $row['pass'];
                $_SESSION["id_user"] = $row['id_user'];
            } 
        }

    }
    if(isset($_SESSION["username"])){
        header("Location:index.php");   
    }
?>

</body>
</html>