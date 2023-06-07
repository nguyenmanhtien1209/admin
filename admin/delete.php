<?php
include('admin_connect.php');
 if(isset($_GET["del"])){
    $delete = $_GET["del"];
    $sql = "DELETE FROM ql_taixe WHERE ID = '$delete' ";
    $run = mysqli_query($conn, $sql);
   if($run)
    header('location: admin_ql_taixe.php');
   else
      echo "not delete";

 }