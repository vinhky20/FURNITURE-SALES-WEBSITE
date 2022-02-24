<?php
    require '../connect.php';
    $id_sp_request = $_GET['id'];

    if(isset($_POST['suasanpham'])){
        $tensanpham = $_POST['tensanpham'];
        $id_sanpham = $_POST['id_sanpham'];
        $giasp = $_POST['giasp'];
        $soluong = $_POST['soluong'];
        $hinhanh = $_POST['hinhanh'];
        $tinhtrang = $_POST['tinhtrang'];
        $danhmuc = $_POST['danhmuc'];
        $sql_update = "UPDATE tbl_sanpham SET id_sanpham='".$id_sanpham."', tensanpham='".$tensanpham."', giasp='".$giasp."',soluong='".$soluong."', hinhanh='".$hinhanh."' ,tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE tbl_sanpham.id_sanpham = '".$id_sp_request."'";
        mysqli_query($conn,$sql_update);

    }
    $conn->close();
    header('Location:admin.php');
?>