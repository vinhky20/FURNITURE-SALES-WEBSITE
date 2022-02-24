<a  style="color: black;" href="../admin.php">Trở về trang chủ</a><br>
<a  style="color: black;" href="lietke.php">Trở về trang quản lý đơn hàng</a>
<h2 style="text-align: center;">XEM ĐƠN HÀNG</h2>
<hr>
<?php
    require 'connect.php';
    $code = $_GET['code'];
    $sql_lietke_dh ="SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' 
                                                                ORDER BY tbl_cart_details.id_cart_details DESC" ;
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<table style="width:100%" border="1" align="center" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $i = 0 ;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
            $i++;
            $thanhtien = $row['giasp']*$row['soluongmua'];
            $tongtien = $tongtien + $thanhtien;
    ?>
    <tr>
        <td  align="center"><?php echo $i ?></td> 
        <td  align="center"><?php echo $row['code_cart'] ?></td>
        <td  align="center"><?php echo $row['tensanpham'] ?></td>
        <td  align="center"><?php echo $row['soluongmua'] ?></td>
        <td  align="center"><?php echo number_format ($row['giasp'],0,',',',').'vnd' ?></td>
        <td  align="center"><?php echo number_format ($thanhtien,0,',','.').'vnd' ?></td>
       
    </tr>
    <?php
    }
    ?>
    <tr>
    <td colspan="6" align="center">
            <h3>Tổng tiền: <?php echo number_format ($tongtien,0,',','.').'vnđ' ?></h3>
            <p><a style="color: black;" href=""> Đã xử lý</a></p>
        </td>

    </tr>
</table>

