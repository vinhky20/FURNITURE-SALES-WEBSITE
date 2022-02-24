<?php
  require_once("../connect.php");

  $id_sp_request = $_GET['id'];
  // echo $id_book_request;
  $query = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id_sp_request."' ";
  mysqli_query($conn, $query);

  $conn->close();

  header("Location: admin.php");

?>