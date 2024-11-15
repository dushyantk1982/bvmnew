<?php
$area_id=$_REQUEST['area_id'];
include('DAL/database.php');
mysql_query("delete from area where area_id='".$area_id."'");
header('location:area_mgmt.php');
?>