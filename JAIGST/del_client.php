<?php
$client_id=$_REQUEST['client_id'];
include('DAL/database.php');
mysql_query("delete from client where client_id='".$client_id."'");
header('location:client_mgmt.php');
?>