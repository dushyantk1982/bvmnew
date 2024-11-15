<?php
$category_id=$_REQUEST['category_id'];
include('DAL/database.php');
mysql_query("delete from category where category_id='".$category_id."'");
header('location:category_mgmt.php');
?>