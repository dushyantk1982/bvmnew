<?php
$tax_id=$_REQUEST['tax_id'];
include('DAL/database.php');
mysql_query("delete from tax where tax_id='".$tax_id."'");
header('location:tax_mgmt.php');
?>