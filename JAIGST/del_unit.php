<?php
$unit_id=$_REQUEST['unit_id'];
include('DAL/database.php');
mysql_query("delete from unit where unit_id='".$unit_id."'");
header('location:unit_mgmt.php');
?>