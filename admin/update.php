<?php
    require '../connect.php';
  $id_sp_request = $_GET['id'];
  $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sp_request' LIMIT 1";
  $query_sua_sp = mysqli_query($conn,$sql);
?>
<h2 style="text-align: center;">Sửa sản phẩm</h2>
<table border="1" width="40%" style="border-collapse: collapse;" align="center">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="xuly.php?id=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
	 <tr>
	  	<td align="center">Mã sp</td>
	  	<td align="center"><input type="text" value="<?php echo $row['id_sanpham'] ?>" name="id_sanpham"></td>
	  </tr>
	  <tr>
	  	<td align="center">Tên sản phẩm</td>
	  	<td align="center"><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
	  </tr>
	  <tr>
	  	<td align="center">Giá sp</td>
	  	<td align="center"><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td align="center">Số lượng</td>
	  	<td align="center"><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td align="center">
            <input type="text" value="<?php echo $row['hinhanh'] ?>" name="hinhanh">
	  	</td>

	  </tr>
	  <tr>
	    <td align="center">Danh mục sản phẩm</td>
	    <td align="center">
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($conn,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	    <td align="center">Tình trạng</td>
	    <td align="center">
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>1</option>
	    		<option value="0">0</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">1</option>
	    		<option value="0" selected>0</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td align="center" colspan="2" align="center"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
<?php

?>