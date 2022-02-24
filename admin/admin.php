<?php
  require_once("uploading.php");
  require_once("dbhelper.php");
  uploading();
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2><a style="color: black;" href="quanlydonhang/lietke.php">QUẢN LÝ ĐƠN HÀNG</a>(Click vào đây!)</h2>
  <h2><a style="color: black;" href="admin-logout.php">ĐĂNG XUẤT</a></h2>
  <br>
  <h2 style="text-align: center;">Thêm sản phẩm</h2>
  <form style="text-align: center;" method="post" action="" enctype="multipart/form-data">

    <input style="text-align: center;" type="text" name="idsanpham" placeholder="ID SẢN PHẨM" value="<?php if (!empty($_POST['idsanpham']))
                                                            echo $_POST['idsanpham'];?>">
    <input style="text-align: center;" type="text" name="tensanpham" placeholder="TÊN SẢN PHẨM" value="<?php if (!empty($_POST['tensanpham']))
                                                            echo $_POST['tensanpham'];?>">
    <input style="text-align: center;" type="text" name="giasp" placeholder="GIÁ SẢN PHẨM" value="<?php if (!empty($_POST['giasp']))
                                                            echo $_POST['giasp'];?>">
    <input style="text-align: center;" type="text" name="soluong" placeholder="SỐ LƯỢNG" value="<?php if (!empty($_POST['soluong']))
                                                            echo $_POST['soluong'];?>">
    <input style="text-align: center;" type="text" name="image" placeholder="danhmuc/tenhinh.loaifile" value="<?php if (!empty($_POST['image']))
                                                            echo $_POST['image'];?>">
    <input style="text-align: center;" type="text" name="tinhtrang" placeholder="TÌNH TRẠNG" value="<?php if (!empty($_POST['tinhtrang']))
                                                            echo $_POST['tinhtrang'];?>">
    <input style="text-align: center;" type="text" name="id_danhmuc" placeholder="ID DANH MỤC" value="<?php if (!empty($_POST['id_danhmuc']))
                                                            echo $_POST['id_danhmuc'];?>">
    <br>
    <br>
    <input type="submit" value="Thêm">
  </form>
  


  <h2 style="text-align: center;">Xoá sản phẩm</h2>
  <table border="1" align="center" width="80%" style="border-collapse: collapse;">
    <tr>
        <th colspan="7" style="font-size: 24px;">THÔNG TIN SẢN PHẨM</th>
    </tr>
    <tr>
      <th width="8%">Mã sản phẩm</th>
      <th width="20%">Tên sản phẩm</th>
      <th width="10%">Giá sản phẩm</th>
      <th width="10%">Số lượng</th>
      <th width="15%">Hình ảnh</th>
      <th width="10%">Xoá</th>
      <th width="10%">Cập nhật</th>

    </tr>

    <?php
      $sql  = 'select id_sanpham, tensanpham, giasp, soluong, hinhanh from tbl_sanpham';
      $list = executeResult($sql);

      //$index = 1;
      foreach($list as $item){
        $id = $item['id_sanpham'];
        echo '
        <tr>
          <td align="center">'.$item['id_sanpham'].'</td>
          <td align="center">'.$item['tensanpham'].'</td>
          <td align="center">'.$item['giasp'].'</td>
          <td align="center">'.$item['soluong'].'</td>
          <td align="center">'.$item['hinhanh'].'</td>
          <td align="center"><a style="color:black;" href="./delete.php?id='.$id.'">Xoá</a></td>
          <td align="center"><a style="color:black;" href="./update.php?id='.$id.'">Cập nhật</a></td>
        </tr>
        ';
      }
    ?>
  </table>
  
</body>

</html>