<?php
require_once('config.php');

function execute($sql) {
  //save data into table
  //open connection to DB
  $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
  //insert, update, delete
  mysqli_query($con, $sql);

  //close connection
  //mysqli_close($con);
}

function executeResult($sql) {
  //save data into table
  //open connection to DB
  $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
  //insert, update, delete
  mysqli_set_charset($con, 'UTF8');
  $result = mysqli_query($con, $sql);
  // mysqli_query($con, $sql);
  $data = [];
  while ($row = mysqli_fetch_array($result, 1)) {
    $data[] = $row;
  }
  //close connection
  mysqli_close($con);

  return $data;
}