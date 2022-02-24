
<?php
    function uploading(){
        if(!empty($_POST)){
            require_once("../connect.php");
            if (isset($_POST['image']) && isset($_POST['tensanpham']) && isset($_POST['idsanpham']) &&
            isset($_POST['giasp']) && isset($_POST['soluong']) && isset($_POST['tinhtrang'])
            && isset($_POST['id_danhmuc'])
            ){

            $image = $_POST['image'];
            $tensanpham = $_POST['tensanpham'];
            $idsanpham = $_POST['idsanpham'];
            $giasp = $_POST['giasp'];
            $soluong = $_POST['soluong'];
            $tinhtrang = $_POST['tinhtrang'];
            $iddanhmuc = $_POST['id_danhmuc'];

            $query = "INSERT INTO tbl_sanpham  VALUES ('$idsanpham','$tensanpham','$giasp','$soluong','$image','$tinhtrang','$iddanhmuc') ;";
            $result = $conn->query($query)
                or die("Query failed: " . $conn->connect_error);
            }
        }
    }

?>