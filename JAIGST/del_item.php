<?php
$item_id=$_REQUEST['item_id'];
include('DAL/database.php');
mysql_query("delete from item where item_id='".$item_id."'");
header('location:item_mgmt.php');
?>