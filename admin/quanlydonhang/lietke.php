<br>
<a style="color: black;"  href="../admin.php">Trở về trang chủ</a>
<h2 style="text-align: center;" >LIỆT KÊ ĐƠN HÀNG</h2>

<?php
    require 'connect.php';
    $sql_lietke_dh ="SELECT * FROM tbl_cart,tbl_user WHERE tbl_cart.id_khachhang=tbl_user.id_user ORDER BY tbl_cart.id_cart DESC" ;
    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
?>
<table style="width:100%" align="center" border="1" >
    <tr>
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0 ;
    while($row = mysqli_fetch_array($query_lietke_dh)){
            $i++;
    ?>
    <tr>
        <td align="center"><?php echo $i ?></td> 
        <td align="center"><?php echo $row['code_cart'] ?></td>
        <td align="center"><?php echo $row['fullname'] ?></td>
        <td align="center"><?php echo $row['diachi'] ?></td>
        <td align="center"><?php echo $row['email'] ?></td>
        <td align="center"><?php echo $row['phonenumber'] ?></td>
        <td align="center">
        <?php if($row['cart_status']==1 ){
            echo '<a href="xuli.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
            }else{
                echo'Đã xem';
            }
            ?>
        </td>
        <td align="center">
            <a href="xemdonhang.php?code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
        </td>
    </tr>
    <?php
    }
    ?>
</table>
