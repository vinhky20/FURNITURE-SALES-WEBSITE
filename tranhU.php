<?php
	require 'connect.php';
$query = "select id_sanpham, tensanpham, giasp, hinhanh 
from tbl_sanpham sp join tbl_danhmuc dm on sp.id_danhmuc = dm.id_danhmuc
where tendanhmuc = 'picture';";
	$result = $conn->query($query)
	    or die("Query failed: " . $conn->connect_error);
		
	if($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()){
					


?>

<div class="col l-3 m-6 c-12">
    <div class="product">
        <div class="product-img">
            <img src="./images/<?php echo "$row[hinhanh]" ?>" alt="">
        </div>
        <h4 class="product-desr"><?php echo "$row[tensanpham]" ?></h4>
        <span class="product-price"><?php echo "$row[giasp]" ?></span>
        <form action="cart.php?id=<?php echo $row["id_sanpham"]; ?>" method="POST">
        <div class="themvaogio">
			<button class="product-addtocart" type="submit" name="add-to-cart">
							THÊM VÀO GIỎ
			</button>
        </div>
		</form>
    </div>
</div>



<?php
    	}
	}
?>