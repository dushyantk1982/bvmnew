<?php
$order_id=$_REQUEST['order_id'];
include('DAL/database.php');
mysql_query("update order_book set status='Cancelled' where order_id='".$order_id."'");
header('location:order_mgmt.php');
?>